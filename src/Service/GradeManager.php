<?php

namespace App\Service;

use App\Entity\Grade;

/**
 * GradeManager class
 */
class GradeManager
{
    public function __construct()
    {
    }
    
    public function getAverage(array $grades)
    {
        $sum = 0.0;
        $divisor = 0;
        
        foreach ($grades as $grade)
        {
            $sum += $grade->getValue() * $grade->getCoef();
            $divisor += $grade->getCoef();
        }
        
        if ($divisor == 0)
            return 0;
        
        return $sum / $divisor;
    }
}
