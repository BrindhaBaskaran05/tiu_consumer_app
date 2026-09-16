<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
    <meta name="theme-color" content="#170608">
    <title>Login - B2C</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        html {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        body {
            min-height: 100vh;
            min-height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: clamp(12px, 3vw, 30px);
            background: #170608;
            position: relative;
            overflow: hidden;
            font-weight: 500;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.55;
            z-index: 0;
            animation: float 14s ease-in-out infinite;
        }
        .orb-1 { width: clamp(200px, 40vw, 350px); height: clamp(200px, 40vw, 350px); background: #bf2035; top: -80px; left: -80px; }
        .orb-2 { width: clamp(240px, 45vw, 400px); height: clamp(240px, 45vw, 400px); background: #d93850; bottom: -120px; right: -100px; animation-delay: -5s; }
        .orb-3 { width: clamp(160px, 30vw, 250px); height: clamp(160px, 30vw, 250px); background: #e94560; top: 45%; left: 55%; animation-delay: -9s; }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50%      { transform: translate(25px, -25px) scale(1.08); }
        }

        .auth-box {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            padding: clamp(32px, 6vw, 48px) clamp(20px, 5vw, 38px) clamp(28px, 5vw, 38px);
            border-radius: clamp(16px, 3vw, 20px);
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.6);
            animation: cardIn 0.7s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        @keyframes cardIn {
            from { opacity: 0; transform: translateY(30px) scale(0.96); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }

        .title {
            text-align: center;
            color: #fff;
            font-size: clamp(22px, 6vw, 28px);
            font-weight: 700;
            letter-spacing: 0.2px;
            margin-bottom: 6px;
        }

        .subtitle {
            text-align: center;
            color: rgba(255, 255, 255, 0.75);
            font-size: clamp(12.5px, 3.5vw, 14px);
            margin-bottom: clamp(26px, 5vw, 34px);
            font-weight: 500;
            line-height: 1.55;
        }

        .form-group { position: relative; margin-bottom: clamp(14px, 3vw, 20px); }

        .form-group input {
            width: 100%;
            min-height: 50px;
            padding: clamp(14px, 4vw, 16px) 44px clamp(14px, 4vw, 16px) 44px;
            background: rgba(255, 255, 255, 0.05);
            border: 1.5px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            outline: none;
            transition: all 0.3s ease;
            -webkit-appearance: none;
            appearance: none;
            letter-spacing: 0.2px;
        }

        .form-group input::placeholder { color: transparent; }

        .form-group input:focus {
            border-color: #bf2035;
            background: rgba(191, 32, 53, 0.1);
            box-shadow: 0 0 0 4px rgba(191, 32, 53, 0.22);
        }

        .form-group input:-webkit-autofill,
        .form-group input:-webkit-autofill:hover,
        .form-group input:-webkit-autofill:focus {
            -webkit-text-fill-color: #fff;
            -webkit-box-shadow: 0 0 0 1000px rgba(191, 32, 53, 0.12) inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        .form-group label {
            position: absolute;
            left: 44px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            font-size: 15px;
            font-weight: 500;
            pointer-events: none;
            transition: all 0.25s ease;
            padding: 0 4px;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: 0;
            left: 38px;
            font-size: 12px;
            font-weight: 700;
            color: #e94560;
            background: #170608;
            padding: 0 6px;
            border-radius: 4px;
            letter-spacing: 0.3px;
        }

        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            color: rgba(255, 255, 255, 0.55);
            pointer-events: none;
            transition: color 0.25s ease;
        }

        .form-group input:focus ~ .input-icon { color: #e94560; }

        .toggle-pass {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.55);
            padding: 8px;
            transition: color 0.25s ease;
            -webkit-tap-highlight-color: transparent;
            line-height: 1;
            opacity: 0.85;
        }

        .toggle-pass:hover,
        .toggle-pass:active { color: #e94560; opacity: 1; }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: clamp(20px, 4vw, 26px);
            font-size: clamp(12.5px, 3vw, 13.5px);
            font-weight: 500;
            flex-wrap: wrap;
            gap: 8px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            font-weight: 500;
        }

        .remember input {
            width: 16px;
            height: 16px;
            accent-color: #bf2035;
            cursor: pointer;
            flex-shrink: 0;
        }

        .forgot {
            color: #e94560;
            text-decoration: none;
            font-weight: 700;
            transition: color 0.2s ease;
            -webkit-tap-highlight-color: transparent;
        }

        .forgot:hover,
        .forgot:active { color: #d93850; text-decoration: underline; }

        .btn-primary {
            width: 100%;
            min-height: 52px;
            padding: clamp(13px, 3.5vw, 15px);
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #bf2035, #d93850);
            color: #fff;
            font-size: clamp(14.5px, 4vw, 16px);
            font-weight: 700;
            letter-spacing: 0.4px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(191, 32, 53, 0.5);
            -webkit-tap-highlight-color: transparent;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(191, 32, 53, 0.7);
            filter: brightness(1.1);
        }

        .btn-primary:active { transform: translateY(0); }

        .switch-link {
            text-align: center;
            margin-top: clamp(20px, 4vw, 26px);
            font-size: clamp(12.5px, 3.5vw, 14px);
            color: rgba(255, 255, 255, 0.75);
            line-height: 1.6;
            font-weight: 500;
        }

        .switch-link a {
            color: #e94560;
            text-decoration: none;
            font-weight: 700;
            transition: color 0.2s ease;
            -webkit-tap-highlight-color: transparent;
        }

        .switch-link a:hover,
        .switch-link a:active { color: #d93850; text-decoration: underline; }

        @media (max-width: 768px) {
            .auth-box { max-width: 440px; }
        }

        @media (max-width: 480px) {
            .auth-box { max-width: 100%; }
            .form-options { font-size: 12.5px; }
        }

        @media (max-width: 360px) {
            .title { font-size: 20px; }
            .form-group input { font-size: 15px; }
            .form-group label { font-size: 14px; }
            .form-options { flex-direction: column; align-items: flex-start; gap: 6px; }
        }

        @media (max-height: 600px) and (orientation: landscape) {
            body { align-items: flex-start; padding-top: 16px; padding-bottom: 16px; }
            .auth-box { padding: 20px 24px; }
            .title { font-size: 20px; }
            .subtitle { margin-bottom: 14px; }
            .form-group { margin-bottom: 10px; }
            .form-group input { padding: 12px 40px 12px 40px; min-height: 44px; }
            .form-options { margin-bottom: 14px; }
            .btn-primary { min-height: 44px; padding: 11px; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <div class="auth-box">
        <h1 class="title">Login</h1>
        <p class="subtitle">Welcome back! Please log in to continue.</p>

            <!-- SUCCESS MESSAGE -->
            <?php if (session()->getFlashdata('success')): ?>

                <div class="alert alert-success">
                    <?= esc(session()->getFlashdata('success')) ?>
                </div>

            <?php endif; ?>


            <!-- GENERAL ERROR -->
            <?php if (session()->getFlashdata('error')): ?>

                <div class="alert alert-danger">
                    <?= esc(session()->getFlashdata('error')) ?>
                </div>

            <?php endif; ?>


            <!-- VALIDATION ERRORS -->
            <?php if (session()->getFlashdata('errors')): ?>

                <div class="alert alert-danger">

                    <?php foreach (session()->getFlashdata('errors') as $error): ?>

                        <div>
                            <?= esc($error) ?>
                        </div>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>
        <form action="#" method="POST" autocomplete="off">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">Email Address</label>
                <span class="input-icon">✉</span>
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder=" " required>
                <label for="password">Password</label>
                <span class="input-icon">🔒</span>
                <button type="button" class="toggle-pass" onclick="togglePassword(this)" aria-label="Toggle password visibility">👁️</button>
            </div>

            <div class="form-options">
                <label class="remember">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="#" class="forgot">Forgot password?</a>
            </div>

            <button type="submit" class="btn-primary">Login</button>
        </form>

        <p class="switch-link">Don't have an account? <a  href="<?= base_url('register') ?>">Register here</a></p>
    </div>

    <script>
        function togglePassword(btn) {
            const pwd = btn.parentElement.querySelector('input');
            if (pwd.type === 'password') {
                pwd.type = 'text';
                btn.textContent = '🔒';
                btn.setAttribute('aria-label', 'Hide password');
            } else {
                pwd.type = 'password';
                btn.textContent = '👁️';
                btn.setAttribute('aria-label', 'Show password');
            }
        }
    </script>
</body>
</html>