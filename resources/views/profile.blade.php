<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global1.css" />
    <link rel="stylesheet" href="./index1.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Clarendon:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open Sans:wght@600&display=swap" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div class="profile">
        <div class="first-name">First Name</div>
        <div class="input-first-name">
            <input type="text" class="profile-child" placeholder="Jedith Almando" aria-label="Jedith Almando"
                aria-describedby="profile-child">
        </div>

        <div class="last-name">Last Name</div>
        <div class="input-last-name">
            <input type="text" class="profile-item" placeholder="Istian" aria-label="Istian"
                aria-describedby="profile-item">
        </div>

        <div class="phone-number">Phone Number</div>
        <div class="input-phone-number">
            <input type="text" class="profile-inner" placeholder="086271368123412" aria-label="086271368123412"
                aria-describedby="profile-inner">
        </div>

        <div class="email">Email</div>
        <div class="input-email">
            <input type="text" class="email-input" placeholder="Jedithistian@gmail.com"
                aria-label="Jedithistian@gmail.com" aria-describedby="email-input">
        </div>

        <div class="rectangle-div"></div>
        <div class="profile-child1"></div>
        <div class="april">April</div>
        <div class="profile-child2"></div>
        <div class="div1">2003</div>

        {{-- Update Profile --}}
        <div class="postion">
          <img class="profile-child4" alt="" src="{{asset('img/image 12.png')}}" />
          <img class="position-absolute" alt="" src="{{asset('img/Group 57.png')}}" />
        </div>
        

        <div class="div2">13</div>
        <div class="profile1">Profile</div>
        <div class="date-of-birth">Date Of Birth</div>
        <div class="new-password">New Password</div>
        <div class="confirm-password">Confirm Password</div>
        <div class="profile-child5"></div>

        <div class="profile-child6"></div>
        <div class="profile-child7"></div>
        <div class="enter-your-confirm">Enter Your Confirm Password</div>
        <div class="vector-parent">
            <img class="group-child" alt="" src="./public/rectangle-31.svg" />

            <div class="save-changes">Save Changes</div>
        </div>
        <div class="enter-your-new">Enter Your New Password</div>
        <div class="rectangle-parent">
            <div class="group-item"></div>
            <div class="hasil-tes-terakhir">Hasil Tes Terakhir</div>
            <div class="sedang">SEDANG</div>
            <div class="lakukan-tes-untuk">
                *Lakukan tes untuk update tingkat stress anda
            </div>
        </div>

        {{-- Navbar  --}}
        <div class="navbar">
            <div class="rectangle-group">
                <div class="group-inner"></div>
                {{-- Chatbot --}}
                
                <a href="#" class="text-decoration-none text-white">
                    <div class="icon-chatbot">
                        <div class="chatbot">Chatbot</div>
                        <div class="icon-chatbot-child"></div>
                        <img class="chatbot-1-1" alt="" src="{{ asset('img/chatbotccc.png') }}" />
                    </div>
                </a>
                {{-- Tes Psikolog --}}
                <a href="#" class="text-decoration-none text-white">
                    <div class="tes-psikolog">
                        <div class="tes-psikologi">Tes Psikologi</div>
                        <div class="icon-chatbot-child"></div>
                        <img class="icons8-test-96-1-1" alt="" src="{{ asset('img/icons8.png')}}" />
                    </div>
                </a>

            </div>
            {{-- Usernmae --}}
            <a href="#" class="text-decoration-none text-white">
              <div class="username">Username</div>
              <div class="image-10-icon">
                  <div class="image-10-icon-child"></div>
                  <img class="chatbot-1-1" alt="" src="{{asset('img/image 12.png')}}" />
              </div>
          </a>
        </div>
    </div>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
