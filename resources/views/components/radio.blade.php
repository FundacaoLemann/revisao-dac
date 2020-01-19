<tr>
    <th scope="row">{{ $title }}</th>
    <td><input type="radio" name="{{ $field }}" value="0" required @if(isset($review->$field) && $review->$field === 0) checked @endif></td>
    <td><input type="radio" name="{{ $field }}" value="1" @if(isset($review->$field) && $review->$field === 1) checked @endif></td>
    <td><input type="radio" name="{{ $field }}" value="2" @if(isset($review->$field) && $review->$field === 2) checked @endif></td>
    <td><input type="radio" name="{{ $field }}" value="3" @if(isset($review->$field) && $review->$field === 3) checked @endif></td>
</tr>
