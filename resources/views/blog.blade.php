@extends('app')
@section('title')
Blogs
@endsection


@section('content')
<div class="container-fluid bg-dark" style="height: 50vh;">
    <div class = "container text-center">
        <h1 class="text-primary p-5">This is the content of Blogs</h1>
        <p class="text-primary" >Talks about Laravel structures, statements and syntax.</p>
    </div>
</div>


 <!-- Get value from passed Data -->
 <div class="container-fluid pt-5 pb-5">
    <div class = "container">
        <!-- IF, ELSEIF AND ELSE -->
        <h3>IF, ELSEIF AND ELSE</h3>
        <div class="row">
            <div class="col-md">
                <P>Using this statement to set different condition.</P>
                <p> {{$a}} is belong to 
                    <strong>
                        @if ($a > 1 && $a < 18)
                            Under Age
                        @elseif ($a > 17 && $a < 31)
                            Yound Adult
                        @elseif ($a > 30 && $a < 60)
                            Adult
                        @elseif ($a > 60)
                            Senior
                        @else                                        
                            Invalid Age
                        @endif  
                    </strong>
                </p>
            </div>
            <div class="col-md">
                Code
                    <?php
                    $text = "{{\$a}} is belong to 
                        @if (\$a > 1 && \$a < 18)
                            Under Age
                        @elseif (\$a > 17 && \$a < 31)
                            Yound Adult
                        @elseif (\$a > 30 && \$a < 60)
                            Adult
                        @elseif (\$a > 60)
                            Senior
                        @else                                        
                            Invalid Age
                        @endif" 
                        
                        ?>
                    <textarea name="" id="" rows="10" class="w-100" Disabled> {{$text}}</textarea>
                   
            </div>
        </div>
        <!-- SWITCH CASE -->
        <h3>SWITH CASE</h3>
        <div class="row">
            <div class="col-md">
                <P>Using this statement to match a case.</P>
                <p> {{$a}} match to the bracket of 
                    <strong>
                        @switch($a)
                        @case ($a > 1 && $a < 18)
                            Under Age
                            @break
                        @case ($a > 17 && $a < 31)
                            Yound Adult
                            @break
                        @case ($a > 30 && $a < 60)
                            Adult
                            @break
                        @case ($a > 60)
                            Senior
                            @break
                        @default                                        
                            Invalid Age
                            @break
                        @endswitch 
                    </strong>
                </p>
            </div>
            
            <div class="col-md">
                Code
                    <?php
                    $text = "{{\$a}} match to the bracket of 
                    <strong>
                        @switch(\$a)
                        @case (\$a > 1 && \$a < 18)
                            Under Age
                            @break
                        @case (\$a > 17 && \$a < 31)
                            Yound Adult
                            @break
                        @case (\$a > 30 && \$a < 60)
                            Adult
                            @break
                        @case (\$a > 60)
                            Senior
                            @break
                        @default                                        
                            Invalid Age
                            @break
                        @endswitch"
                        
                        ?>
                    <textarea name="" id="" rows="10" class="w-100" Disabled> {{$text}}</textarea>
            </div>
        </div>

        <!-- FOR LOOP -->
        <h3>FOR LOOP</h3>
        <div class="row">
            <div class="col-md">
                <P>Using this statement to Loop any data you want to populate. <br>
                <h5>MULTIPICATION TABLE</h5>
                </P>
                @for ($x =1; $x<11; $x++)
                    @for ($y =1; $y<11; $y++)
                        {{$x*$y}} &nbsp;
                    @endfor           
                    <br>         
                @endfor
            </div>
            <div class="col-md">
                Code
                    <?php
                    $text = "@for (\$x =1; \$x<11; \$x++)
                    @for (\$y =1; \$y<11; \$y++) 
                    (\$x*\$y) &nbsp;
                    @endfor           
                    <br>         
                    @endfor"
                        
                        ?>
                    <textarea name="" id="" rows="10" class="w-100" Disabled> {{$text}}</textarea>
            </div>

        </div>
        <!-- FOR LOOP -->
        <h5 class="m-3">TURNING INTO TABLE</h5>
        <div class="row">
            <div class="col pt-3">
                <table>
                        @for ($x =0; $x<11; $x++)
                                    @if($x == 0)
                    <thead>
                                    @elseif($x > 1)
                                    <tr>
                                        @endif
                            @for ($y =0; $y<11; $y++)
                                    @if($x == 0 && $y > 0) 
                                    <!-- header column-->
                                    <td class="fw-bold" width= "120px;">{{($x+1)*$y}} </td> 

                                    @elseif($x > 0 && $y > 0)
                                    
                                    <!-- body column-->
                                        <td>{{$x*$y}}</td>
                                    @endif
                            @endfor  
                                    @if($x == 0)
                    </thead>
                    <tbody>
                                    @else
                                    </tr>   
                                    @endif
                        @endfor
                    </tbody>    
                </table>
            </div>
            <div class="col-md">
                Code
                <?php
                $text ="<table>
                @for (\$x =0; \$x<11; \$x++)
                            @if(\$x == 0)
            <thead>
                            @elseif(\$x > 1)
                            <tr>
                                @endif
                    @for (\$y =0; \$y<11; \$y++)
                            @if(\$x == 0 && \$y > 0) 
                            <!-- header column-->
                            <td class=\"fw-bold\" width= \"120px;\">{{(\$x+1)*\$y}} </td> 

                            @elseif(\$x > 0 && \$y > 0)
                            
                            <!-- body column-->
                                <td>{{\$x*\$y}}</td>
                            @endif
                    @endfor  
                            @if(\$x == 0)
            </thead>
            <tbody>
                            @else
                            </tr>   
                            @endif
                @endfor
            </tbody>    
        </table>"
                ?>
                
                <textarea name="" id="" rows="10" class="w-100" Disabled> {{$text}}</textarea>
            </div>
        </div>

        <!-- FOR EACH -->
        <div class="mt-5"></div>
        <h3>FOR EACH</h3>
        <div class="row mb-3">
            <div class="col">
                <hr>
                    @foreach($members as $member)
                        Name: {{$member['name']}} <br> 
                        Birthday: {{$member['birthday']}} 
                        Age: {{$member['age']}} <br>
                        Position: {{$member['position']}}<br>
                <hr>
                    @endforeach
            </div>
            <div class="col-md">
                Code
                <?php
                $text = "
                <hr>
                @foreach(\$members as \$member)
                    Name: {{\$member['name']}} <br> 
                    Birthday: {{\$member['birthday']}} 
                    Age: {{\$member['age']}} <br>
                    Position: {{\$member['position']}}<br>
                <hr>
                @endforeach"
                ?>
                
                <textarea name="" id="" rows="10" class="w-100" Disabled> {{$text}}</textarea>
            </div>
        </div>

        <!-- FOR ELSE -->
        <div class="mt-5"></div>
        <h3>FOR ELSE</h3>
        <div class="row mb-3">
            <div class="col">
                <p> Design program Age Group that will determine if age belongs to underage, young adult, adult, senior. <br>
                    Under age is 1-17; young adult is from 18-30; <br>
                    adult is from 31-59; senior is from 60 or more. <br>
                    Display “Invalid age” for negative numbers.</p>
                    
                    <a type="button" title="Add New Member" class="btn btn-success">New Member</a>
            </div>
        </div>
        <!-- FOR ELSE -->
        <div class="row">
            <div class="col-md">
                
                 @if(sizeof($members) < 1)
                    <h2>NO RECORD YET!</h2>
                 @else
                
                    <table class="w-100">
                        <thead>
                            <td class="fw-bold">Name</td>
                            <td class="fw-bold">Birthday</td>
                            <td class="fw-bold">Age</td>
                            <td class="fw-bold">Group</td>
                            <td class="fw-bold">Position</td>
                            <td class="fw-bold">Action</td>
                        </thead>
                        <tbody>
                            @php
                            /*
                                <tr>
                                    <td>{{$n}}</td>
                                    <td>{{$b}}</td>
                                    <td>{{$a}}</td>
                                    <td>
                                            @if ($a > 1 && $a <18)
                                                Under Age
                                            @elseif ($a > 17 && $a <31)
                                                Yound Adult
                                            @elseif ($a > 30 && $a <60)
                                                Adult
                                            @elseif ($a > 59)
                                                Senior
                                            @else
                                                Invalid Age
                                            @endif
                                    </td>
                                    <td>{{$p}}</td>
                                </tr>
                            */
                            @endphp
                            @forelse($members as $member)
                                <tr>
                                    <td>{{$member['name']}}</td>
                                    <td>{{$member['birthday']}}</td>
                                    <td>{{$member['age']}}</td>
                                    <td>
                                            @if($member['age'] > 1 && $member['age']  < 18)
                                                Under Age
                                            @elseif ($member['age']  > 17 && $member['age']  < 31)
                                                Young Adult
                                            @elseif ($member['age']  > 30 && $member['age'] < 60)
                                                Adult
                                            @elseif ($member['age']  > 59)
                                                Senior
                                            @else
                                                Invalid Age
                                            @endif  
                                    </td>
                                    <td>{{$member['position']}}</td>
                                    <td class="text-center">
                                        <a type="button" title="Edit" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                        <a type="button" title="Delete" class="btn btn-danger m-1"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No record yet!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                @endif
            </div>
            
            <div class="col-md">
                Code
                <?php
                $text = "<table class=\"w-100\">
                <thead>
                    <td class=\"fw-bold\">Name</td>
                    <td class=\"fw-bold\">Birthday</td>
                    <td class=\"fw-bold\">Age</td>
                    <td class=\"fw-bold\">Group</td>
                    <td class=\"fw-bold\">Position</td>
                    <td class=\"fw-bold\">Action</td>
                </thead>
                <tbody>
                    @php
                    /*
                        <tr>
                            <td>{{\$n}}</td>
                            <td>{{\$b}}</td>
                            <td>{{\$a}}</td>
                            <td>
                                    @if(\$a > 1 && \$a <18)
                                        Under Age
                                    @elseif (\$a > 17 && \$a <31)
                                        Yound Adult
                                    @elseif (\$a > 30 && \$a <60)
                                        Adult
                                    @elseif (\$a > 59)
                                        Senior
                                    @else
                                        Invalid Age
                                    @endif
                            </td>
                            <td>{{\$p}}</td>
                        </tr>
                    */
                    @endphp
                    @forelse(\$members as \$member)
                        <tr>
                            <td>{{\$member['name']}}</td>
                            <td>{{\$member['birthday']}}</td>
                            <td>{{\$member['age']}}</td>
                            <td>
                                    @if(\$member['age'] > 1 && \$member['age']  < 18)
                                        Under Age
                                    @elseif (\$member['age']  > 17 && \$member['age']  < 31)
                                        Young Adult
                                    @elseif (\$member['age']  > 30 && \$member['age'] < 60)
                                        Adult
                                    @elseif (\$member['age']  > 59)
                                        Senior
                                    @else
                                        Invalid Age
                                    @endif  
                            </td>
                            <td>{{\$member['position']}}</td>
                            <td class=\"text-center\">
                                <a type=\"button\" title=\"Edit\" class=\"btn btn-info\"><i class=\"bi bi-pencil-square\"></i></a>
                                <a type=\"button\" title=\"Delete\" class=\"btn btn-danger m-1\"><i class=\"bi bi-trash-fill\"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No record yet!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>"
                ?>
                
                <textarea name="" id="" rows="15" class="w-100" Disabled> {{$text}}</textarea>
            </div>
        </div>
        
        <!-- WHILE LOOP -->
        <div class="mt-5"></div>
        <h3>WHILE LOOP</h3>
        <div class="row">
            <div class="col">
                <hr>
                @php
                $ctr = 0;
                @endphp

                @php
                /*
                    @while($ctr <  sizeof($members))

                        @php 
                        $member = $members[$ctr];    
                        @endphp

                        Name: {{$member['name']}} <br> 
                        Birthday: {{$member['birthday']}} 
                        Age: {{$member['age']}} <br>
                        Position: {{$member['position']}}<br>
                        @php
                        $ctr++;
                        @endph
                <hr>
                    @endwhile
                */
                @endphp
                    
            </div>
        </div>
        
    </div> <!-- close tag div of container -->
</div> <!-- close tag div of container-fluid -->
@endsection
