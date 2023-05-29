<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/shortcut.png" type="">
    <title>G_Sport</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->
        @include('home.slider')
        <!-- end slider section -->
    </div>
    <!-- why section -->
    @include('home.why')
    <!-- end why section -->
    @include('home.new_product')

    @include('home.top_product')

    @include('home.our_product')

    {{-- Comment and reply system start here --}}
    <div style="text-align:center; padding-bottom: 30px;">
        <h1 style="font-size: 30px; text-align: center; padding-top: 20px; padding-bottom: 20px;">Comments</h1>

        <form action="{{route('Store_comment')}}" method="POST">
            @csrf
            <textarea style="height: 150px; width: 600px;" placeholder="Comment something here" name="comment"></textarea>
            <br>
            <input type="submit" class="btn btn-primary" value="Comment">
        </form>
    </div>

    <div style="padding-left: 20%">
        <h1 style="font-size: 20px; padding-bottom: 20px;">All comments</h1>
        @foreach ($comments as $comment)
        <div>
            <b>{{$comment->name}}</b>
            <p>{{$comment->comment}}</p>
      
            <a style="color: blue; cursor: pointer;" onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>
            @foreach($reply as $re)
            @if($re->comment_id==$comment->id)
           
            <div style="padding-left: 3%; padding-bottom: 10px; padding-bottom: 10px;">
                <b>{{$re->name}}</b>
                <p>{{$re->reply}}</p>
                <a style="color: blue; cursor: pointer;" onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach

        {{-- reply text box --}}
        <div class="replyDiv" style="display: none;">
            <form action="{{url('add_reply')}}" method="POST">
                @csrf
                <input type="text" id="commentId" name="commentId" hidden>
                <textarea style="height: 100px; width: 500px;" name="reply" placeholder="Write something here"></textarea>
                <br>
                <button type="submit" class="btn btn-warning">Reply</button>
                <a href="javascript:void(0);" class="btn btn-warning closeReply">Close</a>
            </form>
        </div>
    </div>

    {{-- Comment and reply system end here --}}
    <!-- arrival section -->
    @include('home.arrive') 
    <!-- end arrival section -->
    <!-- product section -->
    <!-- end client section -->
    <!-- footer start -->
    @include('home.footer')
    <!-- footer end -->
    @include('home.copyright')
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script>
        function reply(caller) {
            var commentId = $(caller).data('commentid');
            $('#commentId').val(commentId);
            $('.replyDiv').insertAfter($(caller));
            $('.replyDiv').show();
        }

        $(document).ready(function() {
            $('.closeReply').click(function() {
                $('.replyDiv').hide();
            });
        });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) { 
          var scrollpos = localStorage.getItem('scrollpos');
          if (scrollpos) window.scrollTo(0, scrollpos);
      });

      window.onbeforeunload = function(e) {
          localStorage.setItem('scrollpos', window.scrollY);
      };
  </script>
</body>
</html>
