<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sales Order System</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
        rel="stylesheet">

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

            height:100vh;

            padding:20px;

            display:flex;
            justify-content:center;
            align-items:center;

            overflow:hidden;

            background:
            linear-gradient(
                135deg,
                #f8f6f2,
                #f3efe8,
                #ebe5dc
            );

            position:relative;
        }

        .blob1,
        .blob2{

            position:absolute;

            border-radius:50%;

            filter:blur(100px);

            opacity:0.5;
        }

        .blob1{

            width:280px;
            height:280px;

            background:#d8c3a5;

            top:-80px;
            left:-80px;
        }

        .blob2{

            width:280px;
            height:280px;

            background:#eadbc8;

            bottom:-80px;
            right:-80px;
        }

        .login-card{

            width:980px;

            height:550px;

            max-width:95%;

            background:rgba(255,255,255,0.75);

            backdrop-filter:blur(20px);

            border-radius:35px;

            overflow:hidden;

            display:flex;

            box-shadow:
            0 25px 70px rgba(0,0,0,.08);

        }

        .login-card:hover{

            transform:translateY(-3px);
        }

        /* LEFT */

       .left-side{

            width:60%;

            padding:40px 50px;

            background:
            linear-gradient(
                135deg,
                #f8f6f2,
                #f3efe8
            );

            display:flex;

            flex-direction:column;

            justify-content:center;

        }

        .logo-box{

            width:75px;
            height:75px;

            border-radius:22px;

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

            font-size:30px;

            margin-bottom:25px;

            box-shadow:
            0 12px 25px rgba(199,161,122,0.25);
        }

        .left-side h1{
           
    font-size:32px;

    margin-bottom:10px;

            font-size:42px;

            line-height:1.2;

            color:#3d352f;

            margin-bottom:15px;

            font-weight:700;
        }

        .left-side p{

            color:#7b6f66;

            line-height:1.8;

            font-size:14px;
        }

        .mini-card{

            margin-top:30px;

            background:white;

            padding:18px;

            border-radius:18px;

            width:240px;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.05);
        }

        .mini-card h3{

            color:#3d352f;

            font-size:16px;

            margin-bottom:4px;
        }

        .mini-card p{

            color:#9a8d84;

            font-size:12px;
        }

        /* RIGHT */

        .right-side{

            width:40%;

            background:white;

            padding:40px;

            display:flex;

            flex-direction:column;

            justify-content:center;

        }

        .top-text{

            margin-bottom:25px;
        }

        .top-text h2{

            font-size:26px;

            color:#3d352f;

            margin-bottom:8px;
        }

        .top-text p{

            color:#8b8178;

            font-size:14px;
        }

        .input-group{

            margin-bottom:18px;
        }

        .input-group label{

            display:block;

            margin-bottom:8px;

            color:#5e554f;

            font-size:13px;

            font-weight:500;
        }

        .input-group input{

            width:100%;

            padding:13px;

            border:none;

            border-radius:15px;

            background:#f6f3ef;

            outline:none;

            font-size:14px;

            transition:.3s;
        }

        .input-group input:focus{

            background:#efe8df;

            box-shadow:
            0 0 0 4px rgba(199,161,122,0.15);
        }

        .btn-login{

            width:100%;

            padding:13px;

            border:none;

            border-radius:15px;

            background:
            linear-gradient(
                135deg,
                #d8c3a5,
                #c7a17a
            );

            color:white;

            font-size:15px;

            font-weight:600;

            cursor:pointer;

            transition:.3s;

            margin-top:10px;
        }

        .btn-login:hover{

            transform:translateY(-2px);

            box-shadow:
            0 15px 25px rgba(199,161,122,0.30);
        }

        .alert{

            background:#fde8e8;

            color:#b91c1c;

            padding:12px;

            border-radius:12px;

            margin-bottom:15px;

            font-size:13px;
        }

        .footer{

            margin-top:20px;

            text-align:center;

            color:#a89d95;

            font-size:12px;
        }
        .dashboard-preview{

    display:flex;

    gap:15px;

    margin-top:30px;

}

.stat-box{

    flex:1;

    background:white;

    border-radius:18px;

    padding:18px;

    text-align:center;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);

}

.stat-box h2{

    color:#c7a17a;

    font-size:20px;

    margin-bottom:5px;

}

.stat-box span{

    color:#888;

    font-size:13px;

}

.preview-card{

    margin-top:20px;

    background:white;

    padding:18px;

    border-radius:20px;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);

}

.preview-card h4{

    color:#3d352f;

    margin-bottom:15px;

}

.mini-row{

    display:flex;

    justify-content:space-between;

    margin-bottom:12px;

    color:#666;

}

        .input-wrapper{

    position:relative;

}

.input-wrapper i{

    position:absolute;

    left:18px;

    top:16px;

    color:#b9a79a;

}

.input-wrapper input{

    padding-left:50px;

}

        @media(max-width:900px){

            body{

                height:auto;

                overflow:auto;

                padding:20px;
            }

            .login-card{

                height:auto;

                flex-direction:column;
            }

            .left-side,
            .right-side{

                width:100%;
            }

            .left-side{

                padding:35px;
            }

            .right-side{

                padding:35px;
            }

            .left-side h1{

                font-size:32px;
            }

            .top-text h2{

                font-size:28px;
            }

        }


    .register-link{

    text-align:center;

    margin-top:15px;

    color:#666;

    font-size:14px;
}

.register-link a{

    color:#FDB515;

    font-weight:600;

    text-decoration:none;
}
    </style>

</head>

<body>

    <div class="blob1"></div>
    <div class="blob2"></div>

    <div class="login-card">

        <div class="left-side">
            <div class="logo-box">

    <i class="fas fa-chart-line"></i>

</div>

<h1>
    Sales Order
    <br>
    Management System
</h1>

<p>

    Kelola produk, pelanggan,
    sales order, dan laporan
    dalam satu sistem yang
    cepat, modern, dan efisien.

</p>

<div class="dashboard-preview">

    <div class="stat-box">

        <h2><?= $total_produk ?></h2>
<span>Products</span>
    </div>

    <div class="stat-box">

        <h2><?= $total_pelanggan ?></h2>
<span>Customers</span>
    </div>

    <div class="stat-box">

        <h2><?= $total_order ?></h2>
<span>Orders</span>

    </div>

</div>

<div class="preview-card">

    <h4>System Overview</h4>

    <div class="mini-row">

        <span>Total Penjualan</span>

        <strong>
            Rp <?= number_format($total_penjualan,0,',','.') ?>
        </strong>

    </div>

    <div class="mini-row">

        <span>Total Produk</span>

        <strong><?= $total_produk ?></strong>

    </div>

    <div class="mini-row">

        <span>Total Pelanggan</span>

        <strong><?= $total_pelanggan ?></strong>

    </div>

    <div class="mini-row">

        <span>Total Order</span>

        <strong><?= $total_order ?></strong>

    </div>

    <div class="mini-row">

        <span>Role System</span>

        <strong>
            Admin • Sales • Manager
        </strong>

    </div>

</div>
        </div>

        <div class="right-side">

            <div class="top-text">

                <h2>Welcome Back 👋</h2>

<p>

Sign in to access your
Sales Order Dashboard

</p>

            </div>

            <?php if($this->session->flashdata('error')): ?>

                <div class="alert">

                    <?= $this->session->flashdata('error'); ?>

                </div>

            <?php endif; ?>

            <form method="post"
                action="<?= site_url('auth/login');?>">

                <div class="input-group">

                    <label>Username</label>

                    <div class="input-wrapper">

                        <i class="fas fa-user"></i>

                        <input
                            type="text"
                            name="username"
                            placeholder="Enter username"
                            required>

                    </div>

                </div>

                <div class="input-group">

                    <label>Password</label>

                    <div class="input-wrapper">

                        <i class="fas fa-lock"></i>

                        <input
                            type="password"
                            name="password"
                            placeholder="Enter password"
                            required>

                    </div>

                </div>
                <button
                    type="submit"
                    class="btn-login">

                    <i class="fas fa-sign-in-alt"></i>

 Sign In

                </button>
                

            </form>

            <div class="footer">

                © <?= date('Y');?> Sales Order System

            </div>

        </div>

    </div>

</body>
</html>