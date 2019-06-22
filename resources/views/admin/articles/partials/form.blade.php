<div class="form-group">
    <label>Заголовок</label>
    <input type="text" class="form-control" name="title" placeholder="Заголовок новости"
           value="{{ $article->title ?? "" }}" required>
</div>
<div class="form-group">
    <label>Текст новости</label>
    <textarea class="form-control" id="description" name="description" required>{{ $article->description ?? "" }}</textarea>
</div>
<div class="form-group">
    <input type="file" class="form-control-file" name="image" value="{{ $article->image ?? "" }}">
</div>
<input type="submit" class="btn btn-success" value="Сохранить">