<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus {
            outline: none;
            border-color: #333;
        }
        textarea {
            resize: vertical;
            min-height: 150px;
        }
        .btn {
            background-color: #333;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        .btn:hover {
            background-color: #555;
        }
        .contact-info {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #ddd;
        }
        .contact-info h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .contact-info p {
            color: #666;
            margin-bottom: 10px;
            line-height: 1.6;
        }
        .name-error, .email-error, .phone-error, .message-error, .subject-error {
            border: 1px solid red !important;
            color: red;
        }   
    </style>
</head>
<body>
    @include('common.header')

    <div class="container">
        <h1>Contact Us</h1>

        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            @if (session('status'))
                <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        
        <form action="contactform" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name"
                class="{{$errors->first('name') ? 'name-error' : ''}}">
                <span style="color:red">@error('name'){{ $message }}@enderror</span>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"
                class="{{$errors->first('email') ? 'email-error' : ''}}">
                <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number"
                class="{{$errors->first('phone') ? 'phone-error' : ''}}">
                <span style="color:red">@error('phone'){{$message}}@enderror</span>
            </div>
            
            <div class="form-group">
                <label for="subject">Subject *</label>
                <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Enter subject"
                class="{{$errors->first('subject') ? 'subject-error' : ''}}">
                <span style="color:red">@error('subject'){{$message}}@enderror</span>
            </div>
            
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" placeholder="Enter your message here..." class="{{$errors->first('message') ? 'message-error' : ''}}">{{ old('message') }}</textarea>
                <span style="color:red">@error('message'){{$message}}@enderror</span>
            </div>

            <div>
                <label for="attachment">Attachment *</label>
                <input type="file" id="attachment" name="attachment" class="{{$errors->first('attachment') ? 'attachment-error' : ''}}">
                <span style="color:red">@error('attachment'){{$message}}@enderror</span>
            </div><br>
            
            <button type="submit" class="btn">Send Message</button>
        </form>
        
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p><strong>Address:</strong> 123 Main Street, City, State 12345</p>
            <p><strong>Email:</strong> info@example.com</p>
            <p><strong>Phone:</strong> +1 234 567 8900</p>
            <p><strong>Business Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM</p>
        </div>
    </div>

    @include('common.footer')
</body>
</html>
