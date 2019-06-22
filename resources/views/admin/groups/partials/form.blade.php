<div class="form-group">
    <label>Название группы</label>
    <input type="text" class="form-control" name="name" placeholder="Имя группы"
           value="{{ $group->name ?? "" }}" required>
</div>
<div class="form-group">
    <label>Первый воспитатель</label>
    <input type="number" class="form-control" name="educator1" placeholder="Табельный номер первого воспитателя"
           value="{{ $group->educator1 ?? "" }}" required>
</div>
<div class="form-group">
    <label>Второй воспитатель</label>
    <input type="number" class="form-control" name="educator2" placeholder="Табельный номер второго воспитателя"
           value="{{ $group->educator2 ?? "" }}">
</div>
<div class="form-group">
    <label>Помощник воспитателя</label>
    <input type="number" class="form-control" name="assistant" placeholder="Табельный номер помощника воспитателя"
           value="{{ $group->assistant ?? "" }}">
</div>
<div class="form-group">
    <label>Девиз</label>
    <textarea class="form-control" id="slogan" name="slogan">{{ $group->slogan ?? "" }}</textarea>
</div>
<input type="submit" class="btn btn-success" value="Сохранить">