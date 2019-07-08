

<div class="col-md-4 search">
    <form action="{{ route('search_gig') }}" method="get" class="navbar-form navbar-center row col-md-12" role="search">
        <div class="form-group col-9">
        <input style="" type="text" name="search" value="{{isset($search) ? $search : ''}}" class="form-control search-box" placeholder="Search Services">
        </div>
        &nbsp;<button type="submit" class="btn btn-info search-btn col-3">Search</button>
      <script>
      $(document).ready(function() {
        var $submit = $("button[type=submit]"),
            $inputs = $('input[type=text]');

        function checkEmpty() {

            return $inputs.filter(function() {
                return !$.trim(this.value);
            }).length === 0;
        }

            $inputs.on('keyup blur', function() {
            $submit.prop("disabled", !checkEmpty());
            }).keyup();
        });
    </script>
    </form>
</div>