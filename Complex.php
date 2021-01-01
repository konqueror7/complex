<?php

class Complex
{
  private $material;
  private $imaginary;
  
  function __construct($re = 0, $im = 0) {
    $this->material = $re;
    $this->imaginary = $im;    
  }
  
  public function add($a, $b) 
  {
      $result = New Complex();
      $result->material = $a->material + $b->material;
      $result->imaginary = $a->imaginary + $b->imaginary;
      return $result;
  }
  public function sub($a, $b) 
  {
      $result = New Complex();
      $result->material = $a->material - $b->material;
      $result->imaginary = $a->imaginary - $b->imaginary;
      return $result; 
  }
  public function mult($a, $b) 
  {
      $result = New Complex();
      $result->material = $a->material * $b->material - $a->imaginary * $b->imaginary;
      $result->imaginary = $a->imaginary * $b->material + $a->material * $b->imaginary;
      return $result; 
  }
  public function div($a, $b) 
  {
      $result = New Complex();
      $result->material = ($a->material * $b->material + $a->imaginary * $b->imaginary) / ($b->material * $b->material + $b->imaginary * $b->imaginary);
      $result->imaginary = ($a->imaginary * $b->material - $a->material * $b->imaginary) / ($b->material * $b->material + $b->imaginary * $b->imaginary);
      return $result; 
  }
  public function main() 
  {
    $output = '';
    if ($this->imaginary != 0 && $this->material != 0) {
      $operator = $this->imaginary > 0 ? ' + ' : ' - ';
      $this->imaginary = $this->imaginary > 0 ? $this->imaginary : -$this->imaginary;
      $output = '<pre>'.strval($this->material).$operator.strval($this->imaginary).'i'.'</pre>';
    } elseif ($this->imaginary == 0 && $this->material != 0) {
      $output = '<pre>'.strval($this->material).'</pre>';
    } elseif ($this->imaginary != 0 && $this->material == 0) {
      $output = '<pre>'.strval($this->imaginary).'i'.'</pre>';
    } elseif ($this->imaginary == 0 && $this->material == 0) {
      $output = '<pre>'.strval(0).'i'.'</pre>';
    }
    
    return $output;
  }
}
