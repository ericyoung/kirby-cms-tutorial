<?php

// every template has one controller which
// corresponds to the name of the template

return function($kirby, $site, $page  ) {

  $filterBy = get('filter');
  $unfiltered = $page->children()->listed();
  $projects = $unfiltered
    ->when($filterBy, function($filterBy) {
      return $this->filterBy('category', $filterBy);
    })
    ->paginate(1);
  $pagination = $projects->pagination();
  $filters = $unfiltered->pluck('category', null, true); // get every category in site

  return [
    'filterBy' => $filterBy,
    'unfiltered' => $unfiltered,
    'projects' => $projects,
    'pagination' => $pagination,
    'filters' => $filters
  ];
};
