<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Howdy</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <section class="showcase">
        <div class="intro">
            <div class="intro-text-layout">
                <h2>
                    Hello Everyone ! <br />
                    I'm Afif Ghulam, I'm an <span>informatics</span> student.
                </h2>
                <p>Hey and welocome to my personal website page. you can explore my website page just one click below. </p>
            </div>
            <div class="intro-btn-layout">
                <a href="{{ url('about'); }}" class="btn-prime">Futher Information</a>
            </div>
        </div>
    </section>
    <img src="{{asset('img/wave.svg')}}" alt="" srcset="">
</body>
</html>
