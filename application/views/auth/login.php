<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sales Order System</title>

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
        rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{

            min-height:100vh;

            padding:40px;

            display:flex;
            justify-content:center;
            align-items:center;

            overflow:auto;

            background:
            linear-gradient(
                135deg,
                #f8f6f2,
                #f3efe8,
                #ebe5dc
            );

            position:relative;
        }

        /* Background Blur */

        .blob1,
        .blob2{

            position:absolute;

            border-radius:50%;

            filter:blur(100px);

            opacity:0.5;
        }

        .blob1{

            width:350px;
            height:350px;

            background:#d8c3a5;

            top:-100px;
            left:-100px;
        }

        .blob2{

            width:320px;
            height:320px;

            background:#eadbc8;

            bottom:-100px;
            right:-100px;
        }

        /* Main Card */

        .login-card{

            width:1000px;

            min-height:600px;

            background:rgba(255,255,255,0.65);

            backdrop-filter:blur(20px);

            border:1px solid rgba(255,255,255,0.4);

            border-radius:35px;

            overflow:hidden;

            display:flex;

            box-shadow:
            0 20px 60px rgba(0,0,0,0.08);

            z-index:10;

            transition:0.4s ease;
        }

        .login-card:hover{

            transform:translateY(-5px);
        }

        /* Left Side */

        .left-side{

            width:50%;

            padding:70px;

            display:flex;
            flex-direction:column;
            justify-content:center;

            position:relative;
        }

        .logo-box{

            width:95px;
            height:95px;

            border-radius:28px;

            background:
            linear-gradient(
                135deg,
                #d8c3a5,
                #c7a17a
            );

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;

            font-size:42px;

            margin-bottom:35px;

            box-shadow:
            0 12px 30px rgba(199,161,122,0.3);
        }

        .left-side h1{

            font-size:52px;

            line-height:1.15;

            color:#3d352f;

            margin-bottom:22px;

            font-weight:700;
        }

        .left-side p{

            color:#7b6f66;

            line-height:1.9;

            font-size:15px;

            width:90%;
        }

        /* Mini Card */

        .mini-card{

            margin-top:45px;

            background:white;

            padding:22px;

            border-radius:22px;

            width:280px;

            box-shadow:
            0 10px 30px rgba(0,0,0,0.05);
        }

        .mini-card h3{

            color:#3d352f;

            font-size:18px;

            margin-bottom:5px;
        }

        .mini-card p{

            color:#9a8d84;

            font-size:13px;

            width:100%;
        }

        /* Right Side */

        .right-side{

            width:50%;

            background:white;

            padding:70px;

            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .top-text{

            margin-bottom:35px;
        }

        .top-text h2{

            font-size:42px;

            color:#3d352f;

            margin-bottom:10px;

            font-weight:700;
        }

        .top-text p{

            color:#8b8178;

            font-size:15px;
        }

        /* Input */

        .input-group{

            margin-bottom:22px;
        }

        .input-group label{

            display:block;

            margin-bottom:10px;

            color:#5e554f;

            font-size:14px;

            font-weight:500;
        }

        .input-group input{

            width:100%;

            padding:18px;

            border:none;

            border-radius:18px;

            background:#f6f3ef;

            outline:none;

            font-size:14px;

            transition:0.3s;
        }

        .input-group input:focus{

            background:#efe8df;

            box-shadow:
            0 0 0 4px rgba(199,161,122,0.2);
        }

        /* Button */

        .btn-login{

            width:100%;

            padding:18px;

            border:none;

            border-radius:18px;

            background:
            linear-gradient(
                135deg,
                #d8c3a5,
                #c7a17a
            );

            color:white;

            font-size:16px;

            font-weight:600;

            cursor:pointer;

            transition:0.3s;

            margin-top:10px;
        }

        .btn-login:hover{

            transform:translateY(-2px);

            box-shadow:
            0 15px 30px rgba(199,161,122,0.35);
        }

        /* Error */

        .alert{

            background:#fde8e8;

            color:#b91c1c;

            padding:14px;

            border-radius:14px;

            margin-bottom:20px;

            font-size:14px;
        }

        /* Footer */

        .footer{

            margin-top:25px;

            text-align:center;

            color:#a89d95;

            font-size:13px;
        }

        /* Responsive */

        @media(max-width:950px){

            body{
                padding:20px;
            }

            .login-card{

                width:100%;

                height:auto;

                flex-direction:column;
            }

            .left-side,
            .right-side{

                width:100%;
            }

            .left-side{

                padding:50px 35px;
            }

            .right-side{

                padding:50px 35px;
            }

            .left-side h1{

                font-size:40px;
            }

            .top-text h2{

                font-size:34px;
            }
        }

    </style>

</head>

<body>

    <!-- Background Blur -->
    <div class="blob1"></div>
    <div class="blob2"></div>

    <!-- Login Card -->
    <div class="login-card">

        <!-- LEFT -->
        <div class="left-side">

            <div class="logo-box">

                <i class="fas fa-box-open"></i>

            </div>

            <h1>
                Sales Order
                <br>
                Management
            </h1>

            <p>
                Sistem modern untuk mengelola penjualan,
                pelanggan, dan distribusi produk elektronik
                dengan lebih efisien, cepat, dan profesional.
            </p>

            <div class="mini-card">

                <h3>PT Maju Jaya</h3>

                <p>
                    Distribution & Electronic Supplier
                </p>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="right-side">

            <div class="top-text">

                <h2>Hello Again 👋</h2>

                <p>
                    Please login to continue
                </p>

            </div>

            <!-- Error -->
            <?php if($this->session->flashdata('error')): ?>

                <div class="alert">

                    <?= $this->session->flashdata('error'); ?>

                </div>

            <?php endif; ?>

            <!-- FORM LOGIN -->
            <form method="post"
                action="<?= site_url('auth/login');?>">

                <div class="input-group">

                    <label>Username</label>

                    <input type="text"
                        name="username"
                        placeholder="Enter your username"
                        required>

                </div>

                <div class="input-group">

                    <label>Password</label>

                    <input type="password"
                        name="password"
                        placeholder="Enter your password"
                        required>

                </div>

                <button type="submit"
                    class="btn-login">

                    Login Account

                </button>

            </form>

            <div class="footer">

                © <?= date('Y');?> Sales Order System

            </div>

        </div>

    </div>

</body>

</html>