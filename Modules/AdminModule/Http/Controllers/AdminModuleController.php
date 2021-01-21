<?php

namespace Modules\AdminModule\Http\Controllers;

use App\Http\Repository\ClientRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\DataTables;

class AdminModuleController extends Controller
{

    protected $clientRepository;
    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * Get admin homepage.
     */
    public function dashbord()
    {
        return view('adminmodule::admin.index');
    }

    /**
     * Update client status [Active / Inactive].
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateClientStatus($id)
    {
        $this->clientRepository->updateClient($id);
        return redirect()->to('admin');
    }

    public function deleteClient($id)
    {
        $this->clientRepository->delete($id);
    }

    /**
     * Return clients for admin page in datatables.
     *
     * @return mixed
     * @throws \Exception
     */
    function dataTables()
    {
        $clients = $this->clientRepository->findAll();

        return DataTables::of($clients)
            ->addColumn('active', function ($row) {

                $tag = '<i class="fas fa-times"></i>';

                if ($row->status == 1)
                    $tag = '<i class="fas fa-check"></i>';

                return $tag;
            })
            ->addColumn('operation', function ($row) {

                $operation_tags = '<div>
                                        <a href="' . url("admin/update/" . $row->id . "/status") . '" class="btn btn-info" id="update-user-status"><i class="fas fa-pencil-alt"></i> Update Status </a>
                                        <a href="' . url("admin/delete/" . $row->id . "/client") . '" class="btn btn-danger" id="delete-user-record"><i class="fa fa-trash"></i> Delete user</a>
                                    </div>';
                return $operation_tags;

            })
            ->rawColumns(['active' => 'active', 'operation' => 'operation', 'photo' => 'photo'])
            ->make(true);
    }
}
