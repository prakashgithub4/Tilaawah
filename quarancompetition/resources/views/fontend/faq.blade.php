@extends('fontend.layouts.layout')
@section('accordian')

<style type="text/css">
.panel-title {
  position: relative;
}
  
.panel-title::after {
  content: "\f107";
  color: #333;
  top: -2px;
  right: 0px;
  position: absolute;
    font-family: "FontAwesome"
}

.panel-title[aria-expanded="true"]::after {
  content: "\f106";
}
.containermargin{

  margin-top: 148px;
    padding: 147px;
}
#mycolor{
 background-color:#4285f4;
 color:white;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<div class="container containermargin">
<div class="panel-group" id="accordion">
    <!-- First Panel -->
     <?php  $count = 1; ?>
    @foreach($faq as $f)
    <!-- Second Panel -->
    <div class="panel panel-default">
        <div class="panel-heading" id="mycolor">
             <h4 class="panel-title" data-toggle="collapse" data-target="{{'#collapse_'.$count}}">
                 {{$f['title']}}
             </h4>
        </div>
        <div id="{{'collapse_'.$count}}" class="panel-collapse collapse">
            <div class="panel-body">
                {{$f['description']}}
            </div>
        </div>
    </div>
    <?php $count=$count+1; ?>
    @endforeach
    
    <!-- Third Panel -->
    <!-- <div class="panel panel-default">
        <div class="panel-heading" id="mycolor">
             <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
                 Lorem ipsum dolor sit amet?
             </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                 consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </div>
        </div>
    </div> -->
</div>
</div>


@endsection

