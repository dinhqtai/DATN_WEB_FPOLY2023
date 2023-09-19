import { BrowserRouter, Routes, Route } from 'react-router-dom'
import LayoutAdmin from './components/layouts/layoutAdmin'
import AdminQlPhim from './admin/qlPhim/page'
import AdminQlSc from './admin/qlsc/page'
function App() {
  return <BrowserRouter>
    <Routes>
      <Route path='/'>
      </Route>
      <Route path='/admin' element={<LayoutAdmin />}>
        <Route path='' element={<AdminQlPhim />}></Route>
        <Route path='qlSuatChieu' element={<AdminQlSc />}></Route>
      </Route>
    </Routes>
  </BrowserRouter>
}

export default App
