<!-- resources/views/components/job-service-card.blade.php -->
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        <a href="{{ route('job-service.show', $id) }}" class="btn btn-primary">View Details</a>
    </div>
</div>
