<?php

namespace App\Services\Scale\Conversion;

use App\Models\Scale;

/**
 * @property float $ratio
 * @property Scale $scale
 */
class ScaleConversionService
{
    private Scale $scale;

    private float $millimetre;

    /**
     * @param Scale $scale
     * @return ScaleConversionService
     */
    public function setScale(Scale $scale): ScaleConversionService
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * @param float $millimetre
     * @return ScaleConversionService
     */
    public function setMillimetres(float $millimetre): ScaleConversionService
    {
        $this->millimetre = $millimetre;
        return $this;
    }

    public function convert() :float
    {
        return $this->millimetre / $this->scale->ratio;
    }
}