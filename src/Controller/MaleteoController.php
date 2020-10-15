<?php


namespace App\Controller;

use App\Entity\FormularioMaleteo;
use App\Entity\Opiniones;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;






class MaleteoController extends AbstractController {

    /**
     * @Route ("/", name="homepage")
     */


    public function homepage (Request $request, EntityManagerInterface $em){

        //Creamos las variables que se van a usar 

        $nombre=$request->get('nombre');
        $apellidos= $request->get('apellidos');
        $email=$request->get('email');
        $ciudad=$request->get('ciudad');
        $privacidad=$request->get('politica');
        $Nombre_coment=$request->get('nom-coment');
        $Ciudad_coment=$request->get('ciud-coment');
        $Enviar_coment=$request->get('boton-coment');
        $Comentario_text=$request->get('text-comentario');

        // Se recogen los datos introducidos en la web y se envian a la base de datos
        
        if($privacidad == 1){
           
        $solicitud = new FormularioMaleteo();

        $solicitud -> setNombre($nombre);
        $solicitud -> setApellidos($apellidos);
        $solicitud -> setEmail($email);
        $solicitud -> setCiudad($ciudad);

        

        $em->persist($solicitud);
        $em->flush();

        }

        //Enviamos los comentarios a la base de datos 

        if($Enviar_coment){

            $solicitud = new Opiniones();

            $solicitud -> setNombre($Nombre_coment);
            $solicitud -> setComentario($Comentario_text);
            $solicitud -> setCiudad($Ciudad_coment);

            $em->persist($solicitud);
            $em-> flush();

        }

        //Cogemos de la base de datos y lo imprimimos en pantalla

        $repo = $em->getRepository(Opiniones::class);
        $Comentario_text = $repo->findAll();
        $comentarioAleatorios = array_rand($Comentario_text, 3);

        $misComentariosAleatorios= [];

        for ($i=0; $i<3; $i++ ){
            $misComentariosAleatorios[]= $Comentario_text[$comentarioAleatorios[$i]];
        }
        
        //var_dump($misComentarioAleatorios);

        return $this->render("maleteo.html.twig", ["comentarios" => $misComentariosAleatorios]);
 
    }

}

    



