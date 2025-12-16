<x-layout>
    <x-slot:title>Create Category</x-slot:title>
    
    <style>
        .form-container {
            max-width: 600px;
            margin: 2rem auto;
            background: var(--light);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .form-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .back-btn {
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .back-btn:hover {
            color: var(--primary);
        }

        .form-title {
            font-size: 1.875rem;
            font-weight: 800;
            color: var(--text);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text);
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--text);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-cancel {
            padding: 0.75rem 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-cancel:hover {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text);
        }

        .btn-submit {
            padding: 0.75rem 2rem;
            background: var(--gradient);
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
        }

        .error-msg {
            color: #fca5a5;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
    </style>

    <div class="form-container">
        <div class="form-header">
            <a href="{{ route('categories.index') }}" class="back-btn">&larr; Back</a>
            <h1 class="form-title">Create Category</h1>
        </div>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" id="name" class="form-input" 
                       value="{{ old('name') }}" placeholder="e.g. Technology">
                @error('name')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="slug" class="form-input" 
                       value="{{ old('slug') }}" placeholder="e.g. technology">
                @error('slug')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-actions">
                <a href="{{ route('categories.index') }}" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-submit">Save Category</button>
            </div>
        </form>
    </div>
</x-layout>
