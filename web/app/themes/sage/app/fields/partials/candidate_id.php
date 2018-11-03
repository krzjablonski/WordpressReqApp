<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$candidate_id = new FieldsBuilder('candidate_id');

$candidate_id->addTab('ID', ['placement' => 'top'])
                ->addText('candidate_id', ['label' => 'Candidate ID'])
                    ->setInstructions('Enter this candidate ID corresponding to external db');

return $candidate_id;

