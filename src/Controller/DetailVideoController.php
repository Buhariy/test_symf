<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Video;

class DetailVideoController extends AbstractController
{
    /**
     * @Route("/detail/{id}/video", name="detail_video")
     */
    public function index($id)
    {
        $em = $this->getDoctrine()->getManager();
        $video= $em->getRepository(Video::class)->find($id);
        return $this->render('detail_video/index.html.twig', [
            'controller_name' => 'DetailVideoController',
            'video' => $video
        ]);

        
    }
}
