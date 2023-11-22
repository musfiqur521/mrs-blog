<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homecss')

      <style>
        .post_deg{
            padding: 30px;
            text-align: center;
            background-color: black;
        }
        .title_deg{
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white;
        }
        .des_deg{
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            color: whitesmoke;
        }
        .img_deg{
            height: 200px;
            width: 300px;
            padding: 30px;
            margin: auto
        }
      </style>
   </head>
   <body>
      <!-- header section start -->


      <div class="header_section">

        @include('home.header')

        @foreach ($data as $data)



        <div class="post_deg">
            <img class="img_deg" src="/postimage/{{ $data->image }}">
            <h4 class="title_deg">{{ $data->title }}</h4>
            <p class="des_deg">{{ $data->description }}</p>
        </div>

        @endforeach

      </div>

      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>
