@include('common.header')

<style>
    .user-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .page-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .page-header h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .page-header p {
        font-size: 1.1rem;
        color: #7f8c8d;
    }

    .users-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .user-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
        transition: all 0.3s ease;
        border: 1px solid #e8e8e8;
        position: relative;
        overflow: hidden;
    }

    .user-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    }

    .user-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .user-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
        font-weight: 600;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .user-card h2 {
        font-size: 1.5rem;
        color: #2c3e50;
        margin-bottom: 15px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .edit-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        background: #667eea;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .edit-icon:hover {
        background: #5568d3;
        transform: scale(1.1);
    }

    .user-info {
        margin-bottom: 12px;
    }

    .user-info-label {
        display: inline-block;
        font-weight: 600;
        color: #5a6c7d;
        min-width: 100px;
        font-size: 0.9rem;
    }

    .user-info-value {
        color: #34495e;
        font-size: 0.95rem;
    }

    .user-email {
        color: #667eea;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .user-email:hover {
        color: #764ba2;
        text-decoration: underline;
    }

    .user-date {
        color: #7f8c8d;
        font-size: 0.9rem;
    }

    .user-actions {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #ecf0f1;
        display: flex;
        gap: 10px;
    }

    .btn {
        padding: 8px 16px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }

    .btn-secondary {
        background: #ecf0f1;
        color: #2c3e50;
    }

    .btn-secondary:hover {
        background: #d5dbdb;
    }

    .no-users {
        text-align: center;
        padding: 60px 20px;
        background: #f8f9fa;
        border-radius: 12px;
        margin-top: 30px;
    }

    .no-users h3 {
        font-size: 1.5rem;
        color: #7f8c8d;
        margin-bottom: 10px;
    }

    .user-count {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        display: inline-block;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .search-container {
        max-width: 600px;
        margin: 0 auto 40px;
    }

    .search-form {
        display: flex;
        gap: 10px;
        background: white;
        padding: 8px;
        border-radius: 50px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .search-input {
        flex: 1;
        border: none;
        padding: 12px 20px;
        font-size: 15px;
        outline: none;
        background: transparent;
    }

    .search-input::placeholder {
        color: #bdc3c7;
    }

    .search-btn {
        padding: 12px 30px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }

    .filter-tabs {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .filter-tab {
        padding: 8px 20px;
        background: white;
        border: 2px solid #e0e0e0;
        border-radius: 20px;
        color: #5a6c7d;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-tab:hover,
    .filter-tab.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-color: transparent;
    }
    svg.w-5.h-5 {
        width: 1rem;
    }

    @media (max-width: 768px) {
        .users-grid {
            grid-template-columns: 1fr;
        }

        .page-header h1 {
            font-size: 2rem;
        }

        .user-container {
            padding: 20px 15px;
        }

        .search-form {
            flex-direction: column;
            border-radius: 12px;
        }

        .search-btn {
            border-radius: 8px;
        }
    }
</style>

<div class="user-container">
    <div class="page-header">
        <h1>Users Directory</h1>
        <p>Manage and view all registered users</p>
        @if(isset($users) && count($users) > 0)
            <div class="user-count">
                Total Users: {{ count($users) }}
            </div>
        @endif
    </div>

    @if (session('status'))
        <div style="background-color: #e96060; color: #fff; padding: 10px 15px; border-radius: 4px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
            {{ session('status') }}
        </div>
        @elseif (session('updatestatus'))
        <div style="background-color: #4CAF50; color: #fff; padding: 10px 15px; border-radius: 4px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
            {{ session('updatestatus') }}
        </div>
    @endif

    <!-- Search Form -->
    <div class="search-container">
        <form class="search-form" method="GET" action="/search-users">
            <input 
                type="text" 
                name="search" 
                class="search-input" 
                placeholder="Search by name, email, or phone..."
                value="{{ request('search') }}"
            >
            <button type="submit" class="search-btn">Search</button>
        </form>

        <!-- Filter Tabs -->
        <div class="filter-tabs">
            <button class="filter-tab active">All Users</button>
            <button class="filter-tab">Recently Joined</button>
            <button class="filter-tab">Active</button>
            <button class="filter-tab">Verified</button>
        </div>
    </div>

    <i style="font-weight: bold; font-size: 1.2rem;"><x-messageBanner msg="Welcome to the Users Directory" /></i>

    @if(isset($users) && count($users) > 0)
        <div class="users-grid">
            @foreach($users as $user)
                <div class="user-card">
                    <div class="user-avatar">
                        {{ substr($user->fullname, 0, 1) }}
                    </div>
                    
                    <h2>
                        <span>{{ $user->fullname }}</span>
                        <a href="edit/{{ $user->id }}" class="edit-icon" title="Edit User">
                            ✎
                        </a>
                    </h2>
                    
                    <div class="user-info">
                        <span class="user-info-label">Email:</span>
                        <a href="mailto:{{ $user->email }}" class="user-email user-info-value">
                            {{ $user->email }}
                        </a>
                    </div>

                    <div class="user-info">
                        <span class="user-info-label">Phone:</span>
                            {{ $user->phone }}
                    </div>
                    
                    <div class="user-info">
                        <span class="user-info-label">Member Since:</span>
                        <span class="user-date user-info-value">
                            {{ $user->created_at }}
                        </span>
                    </div>

                    <div class="user-info">
                        <span class="user-info-label">Joined:</span>
                        <span class="user-date user-info-value">
                            {{ $user->created_at }}
                        </span>
                    </div>
                    
                    <div class="user-actions">
                        <a href="edit/{{ $user->id }}" class="btn btn-primary">View Profile</a>
                        <a href="#" class="btn btn-secondary">Send Message</a>
                        <a href="delete/{{ $user->id }}" class="btn btn-warning" style="background-color:#e96060;color:#fff;font-size:1.02rem;font-weight:900;">Delete User</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="no-users">
            <h3>No Users Found</h3>
            <p>There are currently no users in the system.</p>
        </div>
    @endif
</div>

<div style="max-width: 1200px; margin: 20px auto; padding: 0 20px; text-align: center;">
    {{ $users->links() }}
</div>

@include('common.footer')