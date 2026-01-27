@include('common.header')

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .signup-wrapper {
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .signup-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            padding: 40px;
            font-family: Arial, sans-serif;
        }

        .signup-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .signup-header h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 8px;
        }

        .signup-header p {
            color: #666;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .required {
            color: #e74c3c;
        }

        .form-input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-input:focus {
            outline: none;
            border-color: #4a90e2;
        }

        .form-input.error {
            border-color: #e74c3c;
        }

        .error-message {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .checkbox-group input {
            margin-right: 8px;
            margin-top: 3px;
        }

        .checkbox-group label {
            color: #555;
            font-size: 13px;
            line-height: 1.5;
        }

        .checkbox-group a {
            color: #4a90e2;
            text-decoration: none;
        }

        .checkbox-group a:hover {
            text-decoration: underline;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background: #4a90e2;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #357abd;
        }

        .signin-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }

        .signin-link a {
            color: #4a90e2;
            text-decoration: none;
            font-weight: 600;
        }

        .signin-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .signup-wrapper {
                padding: 20px 15px;
            }

            .signup-container {
                padding: 30px 20px;
            }

            .signup-header h1 {
                font-size: 24px;
            }
        }
    </style>

<div class="signup-wrapper">
    <div class="signup-container">
    <div class="signup-header">
        <h1>Create Account</h1>
        <p>Sign up to get started</p>
    </div>

    <div>
    @if (session('status'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px 15px; border-radius: 4px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
            {{ session('status') }}
        </div>
    @endif
    </div>

    <form action="signup" method="post">
        @csrf
        
        <div class="form-group">
            <label for="fullname" class="form-label">
                Full Name <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="fullname" 
                name="fullname" 
                class="form-input {{ $errors->has('fullname') ? 'error' : '' }}" 
                placeholder="Enter your full name"
                value="{{ old('fullname') }}"
            >
            @error('fullname')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">
                Email Address <span class="required">*</span>
            </label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="form-input {{ $errors->has('email') ? 'error' : '' }}" 
                placeholder="you@example.com"
                value="{{ old('email') }}"
            >
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone" class="form-label">
                Phone Number
            </label>
            <input 
                type="tel" 
                id="phone" 
                name="phone" 
                class="form-input {{ $errors->has('phone') ? 'error' : '' }}" 
                placeholder="+1 (555) 000-0000"
                value="{{ old('phone') }}"
            >
            @error('phone')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label">
                Password <span class="required">*</span>
            </label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                value="{{ old('password') }}"
                class="form-input {{ $errors->has('password') ? 'error' : '' }}" 
                placeholder="Create a strong password"
            >
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="confirm_password" class="form-label">
                Confirm Password <span class="required">*</span>
            </label>
            <input 
                type="password" 
                id="confirm_password" 
                name="confirm_password" 
                class="form-input {{ $errors->has('confirm_password') ? 'error' : '' }}" 
                placeholder="Re-enter your password"
            >
            @error('confirm_password')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="checkbox-group">
            <input 
                type="checkbox" 
                id="terms" 
                name="terms" 
                value="1"
                {{ old('terms') ? 'checked' : '' }}
            >
            <label for="terms">
                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
            </label>
        </div>
        @error('terms')
            <span class="error-message" style="display: block; margin-top: -15px; margin-bottom: 15px;">{{ $message }}</span>
        @enderror

        <button type="submit" class="submit-btn">Create Account</button>
    </form>

    <div class="signin-link">
        Already have an account? <a href="#">Sign In</a>
    </div>
    </div>
</div>

@include('common.footer')
