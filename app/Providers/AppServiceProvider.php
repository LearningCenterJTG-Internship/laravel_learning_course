use App\Models\User;
use App\Observers\UserObserver;
 
/**
 * Register any events for your application.
 *
 * @return void
 */
public function boot()
{
    User::observe(UserObserver::class);
}