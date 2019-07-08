var client = algoliasearch('AE2ZHABO64', '4e219d1c50314411c083d5ad9b7257e7');
var index = client.initIndex('gigs');
//initialize autocomplete on search input (ID selector must match)
autocomplete('#aa-search-input',
{ hint: false }, {
    source: autocomplete.sources.hits(index, {hitsPerPage: 10}),
    //value to be displayed in input control after user's suggestion selection
    displayKey: 'name',
    //hash of templates used when rendering dataset
    templates: {
        //'suggestion' templating function used to render a single suggestion
        suggestion: function(suggestion) {
          return '<span>' +
            suggestion.description.value + '</span><span>' +
            suggestion.title.value + '</span>';
        }
    }
});