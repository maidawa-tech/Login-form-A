<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Maidawa-Tech</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="customstyles.css">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-5 col-md-7 col-sm-10">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <!-- Logo -->
                        <div class="text-center mb-4">
                            <i class="fas fa-user-circle fa-4x text-primary"></i>
                            <h2 class="mt-3 fw-bold">Sign In</h2>
                            <p class="text-muted">Access your account</p>
                        </div>

                        <!-- Sign In Form -->
                        <form id="signInForm" novalidate>
                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text custom-border">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control custom-border" id="email" placeholder="Enter your email" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text custom-border">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control custom-border" id="password" placeholder="Enter your password" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input custom-border" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-decoration-none">Forgot password?</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
                                <i class="fas fa-sign-in-alt me-2"></i> Sign In
                            </button>

                            <!-- Social Login -->
                            <div class="text-center mb-3">
                                <p class="text-muted divider">or sign in with</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <button type="button" class="btn btn-outline-primary rounded-circle social-btn">
                                        <i class="fab fa-google"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary rounded-circle social-btn">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary rounded-circle social-btn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Sign Up Link -->
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a href="#" class="text-decoration-none">Sign up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="customscript.js"></script>
</body>
</html>