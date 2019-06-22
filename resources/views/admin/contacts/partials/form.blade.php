<div class="form-group">
    <label>Официальное наименование</label>
    <input type="text" class="form-control" name="name" placeholder="Официальное наименование"
           value="{{ $contacts[0]->name ?? "" }}" required>
</div>
<div class="form-group">
    <label>Тип учреждения</label>
    <input type="text" class="form-control" name="type" placeholder="Тип учреждения"
           value="{{ $contacts[0]->type ?? "" }}" required>
</div>
<div class="form-group">
    <label>Населенный пункт</label>
    <input type="text" class="form-control" name="place" placeholder="Населенный пункт"
           value="{{ $contacts[0]->place ?? "" }}" required>
</div>
<div class="form-group">
    <label>Адрес</label>
    <input type="text" class="form-control" name="address" placeholder="Адрес"
           value="{{ $contacts[0]->address ?? "" }}" required>
</div>
<div class="form-group">
    <label>Телефон</label>
    <input type="text" class="form-control" name="phone" placeholder="Телефон"
           value="{{ $contacts[0]->phone ?? "" }}" required>
</div>
<div class="form-group">
    <label>E-mail</label>
    <input type="email" class="form-control" name="email" placeholder="E-mail"
           value="{{ $contacts[0]->email ?? "" }}" required>
</div>
<input type="submit" class="btn btn-success" value="Сохранить">