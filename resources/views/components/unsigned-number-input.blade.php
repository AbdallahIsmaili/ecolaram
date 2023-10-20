<div class="col-md-3 mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="number" min="0" value="{{ old($name) }}" class="form-control" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}">
</div>