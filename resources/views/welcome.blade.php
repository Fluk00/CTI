<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Link Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <head>
        <style>
          /* Resetting margin and padding for body and html */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.navbar {
    background-color: transparent;
    width: 100%;
    box-shadow: none;
    position: sticky;
    top: 0; /* Stick to the top */
    z-index: 1000;
    margin-top: 0; /* Ensure no margin above the navbar */
}

header {
    width: 100%;
    display: flex;
    flex-direction: column;
    margin: 0;
    padding: 0;
}

section.language-layer {
    background-color: #00008E;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: 100%;
    padding: 2px 16px;
    height: 30px;
}

section.logo-layer {
    background-color: white;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    width: 100%;
    padding: 6px 16px;
}

section.logo-layer img {
    height: 40px;
    margin-right: 10px;
}

.language-layer a {
    color: white;
    margin-left: 12px;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
}

.language-layer a:hover {
    color: #ffdd57;
    text-decoration: underline;
}

        </style>
    </head>
    
    
    <body>
        <!-- Header Section -->
        <header class="navbar text-white">
            <!-- Language Switcher Layer (top) -->
            <section class="language-layer">
                <a href="#" class="text-white">ID</a>
                <a href="#" class="text-white">EN</a>
            </section>
            <!-- Logo Layer (bottom) -->
            <section class="logo-layer">
                <img src="{{ asset('images/logo helios.png') }}" alt="Helios Logo" class="logo">
                <img src="{{ asset('images/logo sangfor.png') }}" alt="Sangfor Logo" class="logo">
            </section>
        </header>
    </body>
    

<!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5" style="background-image: url('{{ asset('images/bg sec1.png') }}'); background-size: cover; background-position: center; position: relative;">
        <div class="slider" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('{{ asset('images/slider.png') }}'); background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; 
                z-index: 1;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <h1>Cybersecurity Made Simple with Sangfor Cyber Command</h1>
            <p class="mt-3">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</p>
            <a href="#" class="btn btn-success btn-lg mt-4">FREE TRIAL</a>
        </div>
    </section>

    
    <head>
        <style>
            /* Button Style */
            .btn-primary {
                background-color: #04BE02; /* Green background */
                border-color: #04BE02; /* Green border */
            }
    
            .btn-primary:hover {
                background-color: #039c01; /* Darker green on hover */
                border-color: #039c01; /* Darker green border on hover */
            }
        </style>
    </head>
    
    <body>
        <section class="about py-5" style="background-image: url('{{ asset('images/bg sec2.png') }}'); background-size: cover; background-position: center;">
            <div class="container d-flex flex-column flex-md-row align-items-center">
                <!-- About Text -->
                <div class="about-text me-md-5 mb-4 mb-md-0">
                    <h2>About Sangfor Cyber Command</h2>
                    <p>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions Which is a comprehensive security management paltform designed to protect businesses from cyber threats.</p>
                    <p>It provides  a range of security solutions such as threat detections, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.</p>
                    <p>The platform uses advanced manchine learning algorithms and  big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.</p>
                    <p>Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets form modern-day threats.</p>
                </div>
        
                <!-- Free Trial Form -->
                <form 
                class="free-trial-form p-4 bg-light shadow rounded"
                id="free-trial-form"
            >
                @csrf <!-- CSRF token for security -->
                <h3 class="mb-4">Dapatkan Free Trial selama 1 bulan</h3>
                <p>Analisa keamanan network anda dan lihat hasilnya</p>
                <div class="mb-3">
                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Corporate Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="job_title" placeholder="Job Title" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="company_name" placeholder="Company Name" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="industry" required>
                        <option value="" disabled selected>Industry</option>
                        <option value="Technology">Technology</option>
                        <option value="Finance">Finance</option>
                        <option value="Healthcare">Healthcare</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="contact_permission" id="contactPermission" value="yes">
                    <label class="form-check-label" for="contactPermission">Click this box to be contacted by our team</label>
                </div>
                <a href="/thankyou" class="btn btn-primary w-100">SEND</a>
            </form>
            
            
            
            </div>
        </section>
    </body>
    
    

    <section class="advantages py-5 bg-light" 
    style="background-image: url('{{ asset('images/bg sec3.png') }}'); background-size: cover; background-position: center; position: relative;">
<!-- Slider Layer -->
<div class="slider" 
    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                background-image: url('{{ asset('images/slider.png') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; 
                z-index: 1;">
</div>

<div class="container" style="position: relative; z-index: 2;">
   <h2 class="text-center mb-5 text-white">Sangfor Cyber Command Advantages</h2>
   <div class="row">
       <!-- Card 1 -->
       <div class="col-md-6 col-lg-3 mb-4">
           <div class="card h-100 shadow border-0" style="padding: 20px;">
               <div class="card-body text-center">
                   <img src="{{ asset('images/Virus scan.png') }}" alt="Advanced Threat Detection" class="mb-3" style="width: 70px;">
                   <h5 class="card-title">Advanced Threat Detection</h5>
                   <p class="card-text">Identify and respond to potential security threats in real time, including malware, ransomware, and other cyber threats.</p>
               </div>
           </div> 
       </div>
       <!-- Card 2 -->
       <div class="col-md-6 col-lg-3 mb-4">
           <div class="card h-100 shadow border-0" style="padding: 20px;">
               <div class="card-body text-center">
                   <img src="{{ asset('images/Anti Virus.png') }}" alt="Network Visibility and Control" class="mb-3" style="width: 70px;">
                   <h5 class="card-title">Network Visibility and Control</h5>
                   <p class="card-text">Gain full visibility and control over your network, including monitoring traffic and managing network policies.</p>
               </div>
           </div>
       </div>
       <!-- Card 3 -->
       <div class="col-md-6 col-lg-3 mb-4">
           <div class="card h-100 shadow border-0" style="padding: 20px;">
               <div class="card-body text-center">
                   <img src="{{ asset('images/Upload.png') }}" alt="Cloud Security" class="mb-3" style="width: 70px;">
                   <h5 class="card-title">Cloud Security</h5>
                   <p class="card-text">Protect cloud-based applications and infrastructure, addressing data breaches, account hijacking, and insider threats.</p>
               </div>
           </div>
       </div>
       <!-- Card 4 -->
       <div class="col-md-6 col-lg-3 mb-4">
           <div class="card h-100 shadow border-0" style="padding: 20px;">
               <div class="card-body text-center">
                   <img src="{{ asset('images/Cyber Security.png') }}" alt="Comprehensive Security Management" class="mb-3" style="width: 70px;">
                   <h5 class="card-title">Comprehensive Security Management</h5>
                   <p class="card-text">Manage and monitor your entire security infrastructure from a single console, including security policies and generating reports.</p>
               </div>
           </div>
       </div>
   </div>
</div>
</section>

    
    
<!-- Features Section -->
<section class="features py-5">
    <div class="container">
        <h2 class="text-center mb-5">Sangfor Cyber Command Features</h2>
        <div class="row justify-content-center text-center">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="feature-box">
                    <img src="{{ asset('images/Retina Lock.png') }}" alt="Threat Intelligence" class="mb-3" style="width: 80px;">
                    <h5 class="fw-bold">Threat Intelligence</h5>
                    <p class="text-muted">Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="feature-box">
                    <img src="{{ asset('images/Online Sopping.png') }}" alt="Real-Time Detections" class="mb-3" style="width: 80px;">
                    <h5 class="fw-bold">Real-Time Detections</h5>
                    <p class="text-muted">Real-time alert system provides instant notification of potential security incidents.</p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="feature-box">
                    <img src="{{ asset('images/hat.png') }}" alt="Threats Investigation" class="mb-3" style="width: 80px;">
                    <h5 class="fw-bold">Threats Investigation</h5>
                    <p class="text-muted">In-depth threat investigation capabilities identify the root cause of security incidents to prevent future occurrences.</p>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="feature-box">
                    <img src="{{ asset('images/hacker.png') }}" alt="Comprehensive Security Solutions" class="mb-3" style="width: 80px;">
                    <h5 class="fw-bold">Comprehensive Security Solutions</h5>
                    <p class="text-muted">In-depth threat investigation capabilities provide the tools to take proactive actions and prevent incidents.</p>
                </div>
            </div>
            <!-- Feature 5 -->
            <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
                <div class="feature-box">
                    <img src="{{ asset('images/Safe Chat.png') }}" alt="Rapid Response" class="mb-3" style="width: 80px;">
                    <h5 class="fw-bold">Rapid Response</h5>
                    <p class="text-muted">Tight integration enables quick responses to minimize the impact of potential security threats.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Value to Customers Section -->
<section class="value-to-customers py-5">
    <div class="container">
        <div class="background-section" style="background-image: url('{{ asset('images/bg sec5.png') }}'); background-size: 100% 100%; background-position: center; width: 100%; height: 100%;">
            <h2 class="text-center mb-4">Sangfor Cyber Command's Value to Customers</h2>
            <ul class="list-unstyled text-center mb-5">
                <li class="mb-2">✔ Detect known and unknown threats</li>
                <li class="mb-2">✔ Much better visibility of security posture of the entire infrastructure</li>
                <li class="mb-2">✔ Business Impact Analysis helps IT understand what is already compromised and what needs to be prioritized</li>
                <li class="mb-2">✔ Faster response to improve overall security control</li>
                <li>✔ Much more cost-effective than other solutions such as SIEM</li>
            </ul> 
            <div class="text-center">
                <div class="py-2 px-3" style="background-color: #293660; color: white; display: inline-block; margin-bottom: 1rem; font-size: 1.25rem; font-weight: bold; border-radius: 0.25rem;">
                    Cyber Command Customers Reference
                </div>
            </div>
       
            <div class="d-flex justify-content-center align-items-center gap-4">
                <img src="{{ asset('images/jnt.png') }}" alt="J&T Logo" style="width: 100px;">
                <img src="{{ asset('images/jrp.png') }}" alt="Jasa Raharja Putera Logo" style="width: 100px;">
                <img src="{{ asset('images/ok.png') }}" alt="OK Bank Logo" style="width: 100px;">
                <img src="{{ asset('images/samudera indonesia.png') }}" alt="Samudera Indonesia Logo" style="width: 100px;">
            </div>
        </div>
    </div>
</section>

<!-- New Section -->
<section class="cyber-command py-5">
    <div class="container">
        <h2 class="text-center mb-4">Explore Sangfor Cyber Command with Helios</h2>
        <p class="text-center mb-5">Helios Informatika Nusantara as Sangfor Distributor will provide:</p>
        <div class="row text-center">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/ndr.png') }}" alt="NDR Implementation" class="mb-3" style="width: 50px;">
                        <h5 class="card-title">NDR Implementation</h5>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/incident.png') }}" alt="Incident Response and Threat Hunting" class="mb-3" style="width: 50px;">
                        <h5 class="card-title">Incident Response and Threat Hunting</h5>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/device.png') }}" alt="Device Security Maintenance" class="mb-3" style="width: 50px;">
                        <h5 class="card-title">Device Security Maintenance</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-primary text-white py-5" style="background-image: url('{{ asset('images/slider.png') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Company Info -->
            <div class="col-md-6">
                <h5 class="mb-3">PT. Helios Informatika Nusantara</h5>
                <address>
                    Centennial Tower, 12th Floor,<br>
                    Jl. Jenderal Gatot Subroto<br>
                    No. Kav 24-25, Jakarta 12930, Indonesia
                </address>
                <p>
                    <strong>Phone:</strong> +62 21 8062 2220<br>
                    <strong>Email:</strong> Tencent@helios.id
                </p>
            </div>
            <!-- Map Illustration -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/worldmap.png') }}" alt="World Map" class="img-fluid" style="max-height: 200px;">
            </div>
        </div>
        <!-- Social Media Icons -->
        <div class="text-center mt-4">
            <a href="#" class="me-3">
                <div class="social-icon">
                    <img src="{{ asset('images/FB.png') }}" alt="Facebook">
                </div>
            </a>
            <a href="#" class="me-3">
                <div class="social-icon">
                    <img src="{{ asset('images/ig.png') }}" alt="Instagram">
                </div>
            </a>
            <a href="#" class="me-3">
                <div class="social-icon">
                    <img src="{{ asset('images/twt.png') }}" alt="Twitter">
                </div>
            </a>
            <a href="#" class="me-3">
                <div class="social-icon">
                    <img src="{{ asset('images/yt.png') }}" alt="YouTube">
                </div>
            </a>
            <a href="#">
                <div class="social-icon">
                    <img src="{{ asset('images/in.png') }}" alt="LinkedIn">
                </div>
            </a>
        </div>
        <!-- Footer Bottom Text -->
        <footer class="bg-[#001432] text-white text-center py-3 mt-auto">
            <div class="container mx-auto">
                <p class="mb-0">&copy; 2023 PT. Helios Informatika Nusantara - All Rights Reserved</p>
            </div>
        </footer>
        

<!-- Include FontAwesome for social icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>
</html>
