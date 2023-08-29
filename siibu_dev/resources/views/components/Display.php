<?php

use Illuminate\View\Component;

class Display extends Component
{
public $articles;
public $relatedTags;
/**
* Create a new component instance.
*
* @return void
*/
public function __construct($articles,$relatedTags)
{
//
dd($articles);
$this->articles = $articles;
$this->relatedTags = $relatedTags;
}

/**
* Get the view / contents that represent the component.
*
* @return \Illuminate\Contracts\View\View|\Closure|string
*/
public function render()
{
return view('components.display');
}
}