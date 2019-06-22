<div class="form-group">
    <label>Имя и фамилия</label>
    <input type="text" class="form-control" name="name" placeholder="Введите имя и фамилию"
           value="{{ $kid->name ?? "" }}" required>
</div>
<div class="form-group">
    <label>Завтрак</label>
    <input type="text" class="form-control" name="breakfast" placeholder="Введите отметку о завтраке"
           value="{{ $kid->breakfast ?? "" }}">
</div>
<div class="form-group">
    <label>Обед</label>
    <input type="text" class="form-control" name="lunch" placeholder="Введите отметку об обеде"
           value="{{ $kid->lunch ?? "" }}">
</div>
<div class="form-group">
    <label>Полдник</label>
    <input type="text" class="form-control" name="afternoon" placeholder="Введите отметку о полднике"
           value="{{ $kid->afternoon ?? "" }}">
</div>
<div class="form-group">
    <label>Тихий час</label>
    <input type="text" class="form-control" name="sleep" placeholder="Введите отметку о тихом часе"
           value="{{ $kid->sleep ?? "" }}">
</div>
<div class="form-group">
    <label>Задания на дом</label>
    <textarea class="form-control" id="slogan" name="homework">{{ $kid->homework ?? "" }}</textarea>
</div>
<div class="form-group">
    <label>Другие отметки</label>
    <textarea class="form-control" id="slogan" name="other">{{ $kid->other ?? "" }}</textarea>
</div>