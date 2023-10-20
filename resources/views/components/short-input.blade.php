<div class="mb-3">
  <label for="{{ $name }}" class="form-label">{{ $label }}</label>
  <input type="{{ $type }}" value="{{ old($name) }}" class="form-control" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}">
</div>
