<?php

namespace App\Http\Controllers;
use App\Classes\WebCrawler;

class PagesController extends Controller
{
    public function index(){ return view('pages.index')->with(['WebCrawler' => WebCrawler::Scraper(".SlideCaption__WithPeekCaptionHeadingText-sc-u5mma4-4")]);}
}
