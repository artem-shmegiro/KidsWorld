<div class="form-group">
    <label>Наименование должности</label>
    <input type="text" class="form-control" name="title" placeholder="Наименование должности"
           value="{{ $position->title ?? "" }}" required>
</div>
<div class="form-group">
    <label>Код должности</label>
    <input type="number" class="form-control" name="key" placeholder="Код должности"
           value="{{ $position->key ?? "" }}" required>
</div>
<input type="submit" class="btn btn-success" value="Сохранить">