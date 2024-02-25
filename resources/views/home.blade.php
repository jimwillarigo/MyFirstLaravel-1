@extends('app')
@section('title')
Home
@endsection


@section('content')
@parent
<!-- Defination Section -->
<div class="container-fluid">
    <div class = "container pt-5 pb-5">
        <div class="row text-center">
            <h2 class="text-uppercase">System Integration Archeticture</h2>
            <p>The course covers fundamental concepts of system integration and system architecture. <br>
            It specifically focuses on the various management strategies of system architecture as well as their integration into the organization. </p>
            <p style="text-align: justify;">The course is focused on concepts in enterprise architecture and application integration. 
                It describes data, application, and technology needed to create business solutions for organizations. 
                Principles and major frameworks in EA (Enterprise Architecture) will be introduced as well as the techniques and strategies in designing and planning and managing enterprise architecture.</p>
        </div>
        <div class="row">
            <div class="col">
                <h3> The topics include managing the : </h3>
                <ul>
                    <li>Information systems architecture</li>
                    <li>Ensuring a reliable</li>
                    <li>Secure architecture </li>
                    <li>Integration techniques.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p style="text-align: justify;"><span class="fw-bold">IT integration, or systems integration</span>, is the connection of data, applications, APIs, and devices across your IT organization to be more efficient, productive, and agile. ...
                Integration not only connects, but it also adds value through the new functionalities provided by connecting different systems' functions.</p>
                <p>
                <h3>System Architecture</h3>
                <ul>
                    <li>is the conceptual model that defines the structure, behavior, and more views of a system.</li>
                    <li>can consist of system components and the sub-systems developed, that will work together to implement the overall system.</li>
                </ul>
            </div>
            
            
        </div>
    </div>
</div>

<!-- Approach Section -->
<div class="container-fluid bg-dark text-white">
    <div class = "container pt-5 pb-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-uppercase">System Integration Approach</h2>
                <p class="text-center">System integration is multifaceted and can be approached through different architectural models, depending on the number and nature of components that need to be connected.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md mt-5">
                <div class="card">
                    <img src="{{asset('img/p2p.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Point-to-point model</h5>
                        <p class="card-text"style="text-align: justify; height: 10rem;">Point-to-point integration (P2P) is the architectural pattern in which every system is directly connected to all other systems and apps it needs to work in tandem and share information with. This model can be realized via APIs, webhooks, or custom code.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mt-5">
                <div class="card">
                    <img src="{{asset('img/hub-and-spoke.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hub-and-spoke model</h5>
                        <p class="card-text"style="text-align: justify; height: 10rem;">The hub-and-spoke model is a more advanced type of integration architecture that addresses the issues of point-to-point and helps to avoid the star/spaghetti mess. </p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mt-5">
                <div class="card">
                    <img src="{{asset('img/p2p.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enterprise Service Bus (ESB) model</h5>
                        <p class="card-text"style="text-align: justify; height: 10rem;">The ESB architecture involves the creation of a separate specialized subsystem — an enterprise service bus — that serves as a common user interface layer connecting other subsystems.</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Get value from passed Data -->
<div class="container-fluid pt-5 pb-5">
    <div class = "container">
        <div class="row mb-3">
            <div class="col">
                <p> Design program Age Group that will determine if age belongs to underage, young adult, adult, senior. <br>
                    Under age is 1-17; young adult is from 18-30; <br>
                    adult is from 31-59; senior is from 60 or more. <br>
                    Display “Invalid age” for negative numbers.</p>
                    
                    <a type="button" title="Add New Member" class="btn btn-success">New Member</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table>
                    <thead>
                        <td><strong>Name</strong></td>
                        <td><strong>Birthday</strong></td>
                        <td><strong>Age</strong></td>
                        <td><strong>Group</strong></td>
                        <td><strong>Position</strong></td>
                        <td><strong>Action</strong></td>
                    </thead>
                    <tbody>
                        <?php
                        // <tr style="bor">
                        //     <td>{{$n}}</td>
                        //     <td>{{$b}}</td>
                        //     <td>{{$a}}</td>
                        //     <td>
                        //             @if ($a > 1 && $a <18)
                        //                 Under Age
                        //             @elseif ($a > 17 && $a <31)
                        //                 Yound Adult
                        //             @elseif ($a > 30 && $a <60)
                        //                 Adult
                        //             @elseif ($a > 59)
                        //                 Senior
                        //             @else
                        //                 Invalid Age
                        //             @endif
                        //     </td>
                        //     <td>{{$p}}</td>
                        // </tr>
                        ?>
                        @php
                            //<tr>
                            // <td>{{$name}}</td>
                            // <td>{{$birthday}}</td>
                            // <td>{{$age}}</td>
                            // <td>
                            //     @if ($age > 1 && $age <18)
                            //         Under Age
                            //     @elseif ($age > 17 && $age <31)
                            //         Yound Adult
                            //     @elseif ($age > 30 && $age <60)
                            //         Adult
                            //     @elseif ($age > 59)
                            //         Senior
                            //     @else                                        
                            //         Invalid Age
                            //     @endif  
                            // </td>
                            // <td>{{$position}}</td>
                            // <tr>
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
            </div>
        </div>
        
    </div>
</div>
@endsection


@section('footer')
@parent
@endsection