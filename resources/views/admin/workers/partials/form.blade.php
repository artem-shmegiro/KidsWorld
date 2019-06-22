<div class="form-group">
    <label>Фамилия</label>
    <input type="text" class="form-control" name="surname" placeholder="Фамилия"
           value="{{ $worker->surname ?? "" }}" required>
</div>
<div class="form-group">
    <label>Имя</label>
    <input type="text" class="form-control" name="name" placeholder="Имя"
           value="{{ $worker->name ?? "" }}" required>
</div>
<div class="form-group">
    <label>Отчество</label>
    <input type="text" class="form-control" name="midname" placeholder="Отчество"
           value="{{ $worker->midname ?? "" }}" required>
</div>
<div class="form-group">
    <label>Должность</label>
    <input type="number" class="form-control" name="position" placeholder="Должность"
           value="{{ $worker->position ?? "" }}" required>
</div>
<div class="form-group">
    <label>Вторая должность(при наличии)</label>
    <input type="number" class="form-control" name="position_second" placeholder="Вторая должность"
           value="{{ $worker->position ?? "" }}">
</div>
<div class="form-group">
    <label>Подразделение</label>
    <select class="form-control" name="group" required>
        <option selected>{{ $worker->group ?? "" }}</option>
        <option>Администрация</option>
        <option>Учителя</option>
        <option>Воспитатели</option>
        <option>Повара</option>
    </select>
</div>
<div class="form-group">
    <input type="file" class="form-control-file" name="image">
</div>
<input type="submit" class="btn btn-success" value="Сохранить">