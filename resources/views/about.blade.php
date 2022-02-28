<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <section id="about">
            <div class="title-about">
                <h2>About Me</h2>
            </div>
            <div class="about-content">
                <div class="content-image">
                    <img class="img-me" src="{{ asset('img/aku.jpg') }}" alt="" srcset="">
                </div>
                <div class="content-desc">
                    <p>Hi Everyone ! My Name is Afif Qomarul Ghulam, you can call me Afif or Ghulam. I was born in a small city called Malang. I'm an informatics student in one of the best polytechnic in indonesia. Rightnow i'm doing some mini project with flutter.</p>
                </div>
            </div>
            <div class="intro-btn-layout">
                <a href="#gallery" class="btn-prime">More</a>
            </div>
        </section>
        <!-- Gallery -->
        <section id="gallery">
            <div class="title-gallery">
                <h2>Education</h2>
            </div>
            <div class="content">
                <div class="detail">
                    <img class="img-item" src="{{ asset('img/elementary.jpg') }}" />
                    <h3>Elementary School</h3>
                    <p class="par">
                        I've been studied in first public elementary school of Blimbing for 6 years. I have so many memories here.
                    </p>
                </div>
                <div class="detail">
                    <img class="img-item" src="{{ asset('img/junior.jpg') }}" />
                    <h3>Junior High School</h3>
                    <p class="par">
                        I got some part of my potiential here. In Plus Junior High School of Al-Kautsar Malang we always use Information Technology for academic purpose.
                    </p>
                </div>
                <div class="detail">
                    <img class="img-item " src="{{ asset('img/senior.jpg') }}" />
                    <h3>Vocational High School</h3>
                    <p class="par">When i enrolled myself into vocational school, Finally I found my potential in informatics.</p>
                </div>
                <div class="detail">
                    <img class="img-item " src="{{ asset('img/college.jpg') }}" />
                    <h3>Polytechnic of Malang</h3>
                    <p class="par">Learn a lot in some coding bootcamp that's not enough for me, i will increase my hardskill and softskill in there.</p>
                </div>
                <div class="detail">
                    <img class="img-item " src="{{ asset('img/course.jpg') }}" />
                    <h3>Other Bootcamp and Courses</h3>
                    <p class="par">Beside i do some other class submission :) i'm in love with coding bootcamp and also purchase an online flutter course </p>
                </div>
            </div>
        </section>
        <section id="todo">
            <div class="title-gallery">
                <h2>What I Will Do Next ?</h2>
            </div>
            <div class="todo-content">
                <div class="todo-detail">
                    <h3>Mobile Apps Development</h3>
                    <ul>
                        <li>Learn mobile apps with flutter on udemy or coursera.</li>
                        <li>Create a beautiful consumer app with flutter.</li>
                        <li>Getting some certificates that related to mobile apps development.</li>
                    </ul>
                </div>
                <div class="todo-detail">
                    <h3>UI/UX Design</h3>
                    <ul>
                        <li>Learn about how to make a good User Interface</li>
                        <li>Proficiency in using UI/UX tools like Figma or Adobe XD</li>
                    </ul>
                </div>
                <div class="todo-detail">
                    <h3>Internet of Things</h3>
                    <ul>
                        <li>Learn fundamental of electronics</li>
                        <li>Taking a course at udemy about IoT</li>
                        <li>Make some great things with arduino atmega328P or RaspberryPi</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
