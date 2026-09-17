<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
    <meta name="theme-color" content="#170608">
    <title>Register - B2C</title>
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
            overflow-x: hidden;
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
            max-width: 480px;
            padding: clamp(30px, 5vw, 44px) clamp(20px, 5vw, 38px) clamp(28px, 5vw, 38px);
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
            margin-bottom: clamp(22px, 4vw, 28px);
            font-weight: 500;
            line-height: 1.55;
        }

        /* ===== FLASH MESSAGES ===== */
        .flash-error {
            background: rgba(191, 32, 53, 0.15);
            border: 1px solid rgba(191, 32, 53, 0.5);
            color: #ff8fa3;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
            line-height: 1.6;
            animation: shake 0.4s ease;
        }

        .flash-success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.5);
            color: #6ee7b7;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
            line-height: 1.6;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-4px); }
            75% { transform: translateX(4px); }
        }

        .progress {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(4px, 1.5vw, 8px);
            margin-bottom: clamp(22px, 4vw, 28px);
        }

        .progress-step {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: clamp(11px, 3vw, 12.5px);
            color: rgba(255, 255, 255, 0.6);
            font-weight: 600;
        }

        .step-dot {
            width: clamp(22px, 6vw, 26px);
            height: clamp(22px, 6vw, 26px);
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            border: 2px solid rgba(255, 255, 255, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(10px, 2.8vw, 12px);
            font-weight: 700;
            color: rgba(255, 255, 255, 0.7);
            flex-shrink: 0;
        }

        .progress-step.active .step-dot {
            background: linear-gradient(135deg, #bf2035, #d93850);
            border-color: transparent;
            color: #fff;
            box-shadow: 0 0 15px rgba(191, 32, 53, 0.75);
        }

        .progress-step.active span { color: #fff; }

        .progress-line {
            width: clamp(16px, 5vw, 30px);
            height: 2px;
            background: rgba(255, 255, 255, 0.18);
            border-radius: 2px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(10px, 2.5vw, 14px);
        }

        .form-group { position: relative; margin-bottom: clamp(12px, 3vw, 18px); }

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
        .form-group input:not(:placeholder-shown) + label,
        .form-group input:-webkit-autofill + label,
        .form-group input:-webkit-autofill:focus + label {
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

        .terms {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            font-size: clamp(12.5px, 3vw, 13.5px);
            color: rgba(255, 255, 255, 0.8);
            margin: 4px 0 clamp(18px, 4vw, 24px);
            cursor: pointer;
            user-select: none;
            line-height: 1.55;
            -webkit-tap-highlight-color: transparent;
            font-weight: 500;
            position: relative;
        }

        .terms input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid rgba(255, 255, 255, 0.35);
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.05);
            cursor: pointer;
            transition: all 0.2s ease;
            flex-shrink: 0;
            margin-top: 2px;
            position: relative;
        }

        .terms input[type="checkbox"]:checked {
            background: linear-gradient(135deg, #bf2035, #d93850);
            border-color: transparent;
            box-shadow: 0 0 12px rgba(191, 32, 53, 0.6);
        }

        .terms input[type="checkbox"]:checked::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 1px;
            width: 5px;
            height: 10px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .terms input[type="checkbox"]:hover {
            border-color: #bf2035;
        }

        .terms a { color: #e94560; text-decoration: none; font-weight: 700; }
        .terms a:hover { text-decoration: underline; }

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
            .auth-box { max-width: 460px; }
        }

        @media (max-width: 480px) {
            .auth-box { max-width: 100%; }
            .form-row { grid-template-columns: 1fr; gap: 0; }
        }

        @media (max-width: 360px) {
            .title { font-size: 20px; }
            .form-group input { font-size: 15px; }
            .form-group label { font-size: 14px; }
            .progress-step span { display: none; }
            .terms { font-size: 12px; }
        }

        @media (max-height: 600px) and (orientation: landscape) {
            body { align-items: flex-start; padding-top: 16px; padding-bottom: 16px; }
            .auth-box { padding: 20px 24px; }
            .title { font-size: 20px; }
            .subtitle { margin-bottom: 12px; font-size: 12px; }
            .progress { margin-bottom: 12px; }
            .form-group { margin-bottom: 10px; }
            .form-group input { padding: 12px 40px 12px 40px; min-height: 44px; }
            .terms { margin: 4px 0 12px; }
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
        <h1 class="title">Create Account</h1>
        <p class="subtitle">Fill in your details to get started.</p>

        <!-- ===== FLASH MESSAGES ===== -->
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="flash-error">
                <?php foreach (session()->getFlashdata('errors') as $err): ?>
                    <?= esc($err) ?><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="flash-error">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="flash-success">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>
        <!-- ===== /FLASH MESSAGES ===== -->

        <div class="progress">
            <div class="progress-step active">
                <div class="step-dot">1</div>
                <span>Details</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-dot">2</div>
                <span>Verify</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-dot">3</div>
                <span>Done</span>
            </div>
        </div>

        <form action="<?= base_url('register') ?>" method="POST" autocomplete="off">
            <?= csrf_field() ?>

            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="first_name" name="first_name" placeholder=" " value="<?= esc(old('first_name')) ?>" required>
                    <label for="first_name">First Name</label>
                    <span class="input-icon">👤</span>
                </div>
                <div class="form-group">
                    <input type="text" id="last_name" name="last_name" placeholder=" " value="<?= esc(old('last_name')) ?>" required>
                    <label for="last_name">Last Name</label>
                    <span class="input-icon">👤</span>
                </div>
            </div>

            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " value="<?= esc(old('email')) ?>" required>
                <label for="email">Email Address</label>
                <span class="input-icon">✉</span>
            </div>

            <div class="form-group">
                <input type="tel" id="mobile" name="mobile" placeholder=" " pattern="[0-9]{10,15}" value="<?= esc(old('mobile')) ?>" required>
                <label for="mobile">Phone Number</label>
                <span class="input-icon">📱</span>
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder=" " minlength="8" required>
                <label for="password">Password</label>
                <span class="input-icon">🔒</span>
                <button type="button" class="toggle-pass" onclick="togglePassword(this)" aria-label="Toggle password visibility">👁️</button>
            </div>

            <div class="form-group">
                <input type="password" id="confirm_password" name="confirm_password" placeholder=" " minlength="8" required>
                <label for="confirm_password">Confirm Password</label>
                <span class="input-icon">🔐</span>
                <button type="button" class="toggle-pass" onclick="togglePassword(this)" aria-label="Toggle password visibility">👁️</button>
            </div>

            <label class="terms">
                <input type="checkbox" name="terms" required>
                <span>I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></span>
            </label>

            <button type="submit" class="btn-primary">Create Account</button>
        </form>

        <p class="switch-link">Already have an account? <a href="<?= base_url('login') ?>">Login here</a></p>
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