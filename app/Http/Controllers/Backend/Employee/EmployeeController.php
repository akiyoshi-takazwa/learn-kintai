<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Employee\EmployeeRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * @var EmployeeRepository
     */
    private $employeeRepository;

    /**
     * ChannelController constructor.
     * @param EmployeeRepository $employeeRepository
     */
    public function __construct(
        EmployeeRepository $employeeRepository
    ) {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     *
     * @return View
     */
    public function index()
    {
        $employees = $this->employeeRepository
            ->getEmployee();

        return view('backend.employee.index')
            ->with([
                'employees' => $employees
            ]);
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('backend.employee.create');
    }

    /**
     * @return View
     */
    public function store(Request $request)
    {
        // TOOD バリデーションを✖️

        return ;
    }

    /**
     * @param int $employeeId
     * @return View
     */
    public function edit(int $employeeId)
    {
        return view('backend.employee.edit')
            ;
    }
}
