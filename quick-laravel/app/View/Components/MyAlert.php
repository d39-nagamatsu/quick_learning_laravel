<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MyAlert extends Component
{
  public string $type;
  public string $alertTitle;

  public function __construct(string $type, string $alertTitle)
  {
    $this->type = $type;
    $this->alertTitle = $alertTitle;
  }

  public function render()
  {
    return view('components.my-alert');
  }
}
