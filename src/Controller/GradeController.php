<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Grade;
use App\Service\GradeManager;

class GradeController extends AbstractController
{
    /**
     * @Route("/grade", name="grade")
     */
    public function index(GradeManager $gradeManager)
    {
        $grade1 = new Grade();
        $grade1->setValue(18);
        $grade1->setCoef(1);
        $grade2 = new Grade();
        $grade2->setValue(10);
        $grade2->setCoef(1);
        $grade3 = new Grade();
        $grade3->setValue(12);
        $grade3->setCoef(1);
        
        $grades = [$grade1, $grade2, $grade3];
        
        $avg = $gradeManager->getAverage($grades);
        
        return $this->render('grade/index.html.twig', [
            'avg' => $avg,
        ]);
    }
}
