<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - My Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            line-height: 1.6;
        }
        .blog-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .page-title {
            text-align: center;
            font-size: 42px;
            color: #333;
            margin-bottom: 40px;
        }
        
        /* Blog Post Styles */
        .blog-post {
            background-color: white;
            padding: 40px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .blog-post h2 {
            color: #333;
            font-size: 32px;
            margin-bottom: 15px;
        }
        .blog-meta {
            color: #888;
            font-size: 14px;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }
        .blog-meta span {
            margin-right: 20px;
        }
        .blog-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 8px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }
        .blog-content {
            color: #555;
            font-size: 16px;
            line-height: 1.8;
        }
        .blog-content p {
            margin-bottom: 20px;
        }
        .blog-content h3 {
            color: #333;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        .blog-content ul {
            margin-left: 30px;
            margin-bottom: 20px;
        }
        .blog-content ul li {
            margin-bottom: 10px;
        }
        
        /* Comment Form Styles */
        .comment-section {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-top: 40px;
        }
        .comment-section h3 {
            color: #333;
            font-size: 28px;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        .submit-btn {
            background-color: #667eea;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #764ba2;
        }
        
        /* Existing Comments */
        .existing-comments {
            margin-top: 40px;
        }
        .existing-comments h4 {
            color: #333;
            font-size: 22px;
            margin-bottom: 20px;
        }
        .comment {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 3px solid #667eea;
        }
        .comment-author {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .comment-date {
            color: #888;
            font-size: 12px;
            margin-bottom: 10px;
        }
        .comment-text {
            color: #555;
            line-height: 1.6;
        }
        .blogname-error, .blogemail-error, .blogcomment-error{
            border-color: red !important;
            color:red;
        }
    </style>
</head>
<body>
    @include('common.header')

    <div class="blog-container">
        <h1 class="page-title">Our Blog</h1>

        <!-- Blog Post -->
        <article class="blog-post">
            <h2>10 Tips for Building a Successful Website</h2>
            <div class="blog-meta">
                <span>📅 January 9, 2026</span>
                <span>✍️ By Admin</span>
                <span>🏷️ Web Development, Tips</span>
            </div>
            
            <div class="blog-image">
                Blog Featured Image
            </div>
            
            <div class="blog-content">
                <p>
                    Creating a successful website requires careful planning, design, and execution. Whether you're building a personal blog, 
                    a business website, or an e-commerce platform, following best practices can make all the difference in achieving your goals.
                </p>
                
                <p>
                    In this comprehensive guide, we'll explore the essential elements that contribute to a successful web presence. 
                    From user experience to performance optimization, we'll cover everything you need to know.
                </p>
                
                <h3>Key Elements of a Great Website</h3>
                
                <ul>
                    <li><strong>Responsive Design:</strong> Ensure your website looks great on all devices, from desktop computers to smartphones.</li>
                    <li><strong>Fast Loading Speed:</strong> Optimize images and code to ensure your pages load quickly.</li>
                    <li><strong>Clear Navigation:</strong> Make it easy for visitors to find what they're looking for.</li>
                    <li><strong>Quality Content:</strong> Provide valuable, engaging content that resonates with your audience.</li>
                    <li><strong>SEO Optimization:</strong> Implement best practices to improve your search engine rankings.</li>
                    <li><strong>Security:</strong> Protect your website and user data with proper security measures.</li>
                    <li><strong>Contact Information:</strong> Make it easy for visitors to get in touch with you.</li>
                    <li><strong>Regular Updates:</strong> Keep your content fresh and your technology up to date.</li>
                    <li><strong>Analytics:</strong> Track your website's performance to make data-driven improvements.</li>
                    <li><strong>Call to Action:</strong> Guide visitors toward taking desired actions on your site.</li>
                </ul>
                
                <h3>Conclusion</h3>
                
                <p>
                    Building a successful website is an ongoing process that requires attention to detail and a commitment to continuous improvement. 
                    By focusing on these key elements, you'll be well on your way to creating a website that not only looks great but also 
                    delivers real value to your visitors.
                </p>
                
                <p>
                    Remember, the most important thing is to keep your audience in mind throughout the entire process. What do they need? 
                    What problems can you solve for them? Answer these questions, and you'll be on the path to success.
                </p>
            </div>
        </article>

        <!-- Comment Section -->
        <section class="comment-section">
            <h3>Leave a Comment</h3>

            @if($errors->any())
                <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="submit-comment" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" value="{{old('name')}}" name="name" placeholder="Enter your name"
                    class="{{ $errors->first('name') ? 'blogname-error' : '' }}">
                    <span class="error" style="color:red;">@error('name') {{$message}}@enderror</span>
                </div>
                
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" value="{{old('email')}}" name="email" placeholder="Enter your email"
                    class="{{ $errors->first('email') ? 'blogemail-error' : '' }}">
                    <span class="error" style="color:red;">@error('email'){{$message}}@enderror</span>
                </div>
                
                <div class="form-group">
                    <label for="comment">Comment *</label>
                    <textarea id="comment" name="comment" value="{{old('comment')}}" placeholder="Write your comment here..."
                    class="{{ $errors->first('comment') ? 'blogcomment-error' : '' }}">{{old('comment')}}</textarea>
                    <span class="error" style="color:red;">@error('comment'){{$message}}@enderror</span>
                </div>
                
                <button type="submit" class="submit-btn">Post Comment</button>
            </form>

            <!-- Existing Comments -->
            <div class="existing-comments">
                <h4>Comments (3)</h4>
                
                <div class="comment">
                    <div class="comment-author">Sarah Johnson</div>
                    <div class="comment-date">January 8, 2026 at 2:30 PM</div>
                    <div class="comment-text">
                        Great article! These tips are really helpful. I especially appreciate the emphasis on responsive design. 
                        It's so important in today's mobile-first world.
                    </div>
                </div>
                
                <div class="comment">
                    <div class="comment-author">Michael Chen</div>
                    <div class="comment-date">January 8, 2026 at 4:15 PM</div>
                    <div class="comment-text">
                        Thanks for sharing this comprehensive guide. The section on SEO optimization was particularly useful. 
                        Looking forward to more content like this!
                    </div>
                </div>
                
                <div class="comment">
                    <div class="comment-author">Emily Rodriguez</div>
                    <div class="comment-date">January 9, 2026 at 9:00 AM</div>
                    <div class="comment-text">
                        Excellent post! I've bookmarked this for future reference. The tips on website security are especially 
                        relevant given all the cyber threats these days.
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('common.footer')
</body>
</html>
