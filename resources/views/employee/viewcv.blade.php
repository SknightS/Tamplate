<html>
<body style="background-color:white;">

<div style="padding-left:0px;margin-top:10px; ">
    <h1 style="font-size:36pt;"><i><span style="color:orange;">Curriculum Vitae</span></i></h1>
    <div style="padding-left:150px;margin-top:2px; ">
        <h1 style="font-size:36pt;"><i><span style="color:green;">{{$empinfo->first()->candidateName}}</span></i></h1>

    </div>
    <div style="margin-top: -30px; margin-left: 150px">
        <span style=" margin-top: -120px">{{$empinfo->first()->professionTitle}}</span>
        <p>Muhammad Rehan Gull<br>Boostan colony, qainchee stop, main feerozpur road, Lahore
            <br>03337172102<br>rehan.gull@ymail.com</p>
    </div>
    <div id="menu" style="background-color:white;width:150px;height:700px;float:left;">
    </div>
    <div id="content" style="background-color:white;float:left;width:700px;height:1800px;">
<h1 style="font-size:25pt;">About Me:</h1>
@foreach($empinfo as $empinfo)
    {{$empinfo->aboutme}}
        @endforeach
        <hr>
<h1 style="font-size:15pt;">EDUCATION:</h1>
      <table>
        <tr>
            <th>Name of Institution</th>
            <th style="padding: 0px 30px">Degree Name</th>
            <th style="padding: 0px 30px">Start Date</th>
            <th style="padding: 0px 30px">End Date</th>
        </tr>
          @foreach($education as $edu)
        <tr>
           <td >{{$edu->schoolName}}</td>
           <td style="padding: 0px 30px">{{$edu->degreeName}}</td>
           <td style="padding: 0px 30px">{{$edu->startDate}}</td>
           <td style="padding: 0px 30px">@if(!empty($edu->currentlyRunning)){{"Running"}}@else{{$edu->endDate}}@endif</td>
        </tr>
          @endforeach

     </table>
    <hr>
<h1 style="font-size:15pt;">Work experience:</h1>
        <table>
            <tr>
                <th>Company Name</th>
                <th style="padding: 0px 30px">Post Name</th>
                <th style="padding: 0px 30px">Durations</th>
                <th style="padding: 0px 30px">Description</th>

            </tr>
           @foreach($workexperience as $wp)
            <tr>
               <td >{{$wp->comapnyName}}</td>
               <td style="padding: 0px 30px">{{$wp->postName}}</td>
               <td style="padding: 0px 30px">{{$wp->duration}}</td>
               <td style="padding: 0px 30px">{{$wp->description}}</td>

           </tr>
               @endforeach
        </table>
<hr>
<h1 style="font-size:15pt;">Summary skill:</h1>
        <table>
            <tr>
                <th>Skill Name</th>
                <th style="padding: 0px 30px">Percentage of Skill</th>


            </tr>
            @foreach($skill as $skills)
                <tr>
                    <td >{{$skills->skillName}}</td>
                    <td style="padding: 0px 30px">{{$skills->percentage}}</td>


                </tr>
            @endforeach
        </table>
        <hr>
        <h1 style="font-size:15pt;">Free Time:</h1>
        <table>
            <tr>
                <th>Day</th>
                <th style="padding: 0px 30px">Start Time</th>
                <th style="padding: 0px 30px">End Time</th>


            </tr>
            @foreach($freetime as $freetime)
                <tr>
                    <td >{{$freetime->day}}</td>
                    <td style="padding: 0px 30px">{{$freetime->startTime}}</td>
                    <td style="padding: 0px 30px">{{$freetime->endTime}}</td>


                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>