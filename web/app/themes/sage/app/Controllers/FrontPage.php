<?php

namespace App\Controllers;

use Illuminate\Support\Collection;
use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    protected $query;

    public function __construct()
    {
        $this->query = new WP_Query([
            'post_type' => 'candidates'
        ]);
    }

    public function candidatesIndex()
    {
        $output = new Collection();
        if ($this->query->have_posts()): while($this->query->have_posts()): $this->query->the_post();
            $tmp = new Collection([
                'candidate_name' => get_the_title(),
                'candidate_id' => get_field('candidate_id'),
                'candidate_link' => get_the_permalink()
            ]);
            $output->prepend($tmp);
        endwhile; endif;
        return $output->all();
    }
}
