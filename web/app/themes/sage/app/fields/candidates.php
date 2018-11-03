<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$candidate = new FieldsBuilder('candidate');

$candidate->setLocation('post_type', '==', 'candidates');

$candidate->addFields(get_field_partial('partials.candidate_id'));

return $candidate;