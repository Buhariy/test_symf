<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Video;


    
class HomeController extends AbstractController {
    /**
     * @Route("/home")
     */
    public function home()
    {

        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository('App:Video')->findAll();
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'videos'=>$videos
        ]);
    }

        /**
     * @Route("/home/video/{id}", name="detail_video")
     */
    public function index($id)
    {
        $em = $this->getDoctrine()->getManager();
        $video= $em->getRepository(Video::class)->find($id);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'DetailVideoController',
            'video' => $video
        ]);

        
    }




}