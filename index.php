<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitamin C Serum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <header>
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Vitamin C, But Make It Powerful – Get That Dewy Glow!</h1>
            <p>Our powerful Vitamin C Serum brightens, hydrates, and fights fine lines for a radiant, youthful glow.</p>
            <a href="#subscription" class="btn btn-outline-pink mt-3">Get Your GLow Now!</a>
            <a href="#features" class="btn btn-outline-pink mt-3">Read More</a>
        </div>
    </div>
</header>


<main>   
<section id="features" >
<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold" style="color: orange;">What Makes Our Vitamin C Serum Special?</h2>
    <div class="row g-4">
        
        <div class="col-md-4">
            <div class="benefit-card p-3">
                <i class="fas fa-sun benefit-icon"></i>
                <h4 class="fw-bold">Brightening & Even Skin Tone</h4>
                <p>Fades dark spots and enhances radiance for a smooth, glowing complexion.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="benefit-card p-3">
                <i class="fas fa-tint benefit-icon"></i>
                <h4 class="fw-bold">Deep Hydration & Moisture Lock</h4>
                <p>Infused with <strong>Hyaluronic Acid</strong> to keep your skin plump and hydrated all day long.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="benefit-card p-3">
                <i class="fas fa-shield-alt benefit-icon"></i>
                <h4 class="fw-bold">Powerful Antioxidant Protection</h4>
                <p>Shields skin from environmental stress, UV damage, and pollution.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="benefit-card p-3">
                <i class="fas fa-leaf benefit-icon"></i>
                <h4 class="fw-bold">Collagen-Boosting Formula</h4>
                <p>Supports elasticity and firmness, reducing the appearance of fine lines & wrinkles.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="benefit-card p-3">
                <i class="fas fa-water benefit-icon"></i>
                <h4 class="fw-bold">Fast Absorbing & Non-Greasy</h4>
                <p>Lightweight formula quickly sinks into the skin without leaving a sticky residue.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="benefit-card p-3">
                <i class="fas fa-heart benefit-icon"></i>
                <h4 class="fw-bold">Gentle & Suitable for All Skin Types</h4>
                <p>Dermatologist-tested, non-irritating, and perfect for sensitive skin.</p>
            </div>
</div>
<div class="d-flex justify-content-center mt-3">
    <a href="#subscription" class="btn btn-outline-pink" style=" margin-right:5px;">Get Your Glow Now!</a>
    <a href="#testimonials" class="btn btn-outline-pink">Read More</a>
</div>
</section>
    
    
 
   <section id="testimonials">
   <div class="container my-5">
        <h2 class="text-center" style="color : orange; font-weight: bold; ">What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <img src="images/girl.jpg" class="card-img-top" alt="Customer 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Emma</h5>
                        <p class="card-text">"I've struggled with dull skin for years, but this serum changed everything! My dark spots have faded significantly."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <img src="images/girl1.jpg" class="card-img-top" alt="Customer 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Diya</h5>
                        <p class="card-text">"I love how lightweight and hydrating this serum is! It absorbs quickly, leaving my skin soft and plump without feeling greasy."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <img src="images/girl3.jpg" class="card-img-top" alt="Customer 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sophia</h5>
                        <p class="card-text">"I have very sensitive skin, and most products irritate me. This serum is gentle yet super effective—no breakouts, just glow!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
 


    <section id="subscription">
        <h2 class="text-center" style="color : orange; font-weight: bold; ">Join Us – Don't Miss Out!</h2>
    <div class="container">
        <div class="form-container">
            <h3 class="text-center" style="border-bottom: 2px solid  orange; color: orange">Subscribe Now</h3>
            <form action="register-process.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-submit">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</body>
</html>