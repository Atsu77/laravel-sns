@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" class="form-control" rows="16" required>
    {{ $article->body ?? old('body') }}
  </textarea>
</div>