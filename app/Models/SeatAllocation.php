namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    protected $fillable = ['user_id', 'trip_id', 'seat_number'];
}
