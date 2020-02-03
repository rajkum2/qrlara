<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQRCODERequest;
use App\Http\Requests\UpdateQRCODERequest;
use App\Repositories\QRCODERepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class QRCODEController extends AppBaseController
{
    /** @var  QRCODERepository */
    private $qRCODERepository;

    public function __construct(QRCODERepository $qRCODERepo)
    {
        $this->qRCODERepository = $qRCODERepo;
    }

    /**
     * Display a listing of the QRCODE.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $qRCODES = $this->qRCODERepository->all();

        return view('q_r_c_o_d_e_s.index')
            ->with('qRCODES', $qRCODES);
    }

    /**
     * Show the form for creating a new QRCODE.
     *
     * @return Response
     */
    public function create()
    {
        return view('q_r_c_o_d_e_s.create');
    }

    /**
     * Store a newly created QRCODE in storage.
     *
     * @param CreateQRCODERequest $request
     *
     * @return Response
     */
    public function store(CreateQRCODERequest $request)
    {
        $input = $request->all();

        $qRCODE = $this->qRCODERepository->create($input);

        Flash::success('Q R C O D E saved successfully.');

        return redirect(route('qRCODES.index'));
    }

    /**
     * Display the specified QRCODE.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $qRCODE = $this->qRCODERepository->find($id);

        if (empty($qRCODE)) {
            Flash::error('Q R C O D E not found');

            return redirect(route('qRCODES.index'));
        }

        return view('q_r_c_o_d_e_s.show')->with('qRCODE', $qRCODE);
    }

    /**
     * Show the form for editing the specified QRCODE.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $qRCODE = $this->qRCODERepository->find($id);

        if (empty($qRCODE)) {
            Flash::error('Q R C O D E not found');

            return redirect(route('qRCODES.index'));
        }

        return view('q_r_c_o_d_e_s.edit')->with('qRCODE', $qRCODE);
    }

    /**
     * Update the specified QRCODE in storage.
     *
     * @param int $id
     * @param UpdateQRCODERequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQRCODERequest $request)
    {
        $qRCODE = $this->qRCODERepository->find($id);

        if (empty($qRCODE)) {
            Flash::error('Q R C O D E not found');

            return redirect(route('qRCODES.index'));
        }

        $qRCODE = $this->qRCODERepository->update($request->all(), $id);

        Flash::success('Q R C O D E updated successfully.');

        return redirect(route('qRCODES.index'));
    }

    /**
     * Remove the specified QRCODE from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $qRCODE = $this->qRCODERepository->find($id);

        if (empty($qRCODE)) {
            Flash::error('Q R C O D E not found');

            return redirect(route('qRCODES.index'));
        }

        $this->qRCODERepository->delete($id);

        Flash::success('Q R C O D E deleted successfully.');

        return redirect(route('qRCODES.index'));
    }
}
